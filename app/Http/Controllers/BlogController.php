<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function list()
    {
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'Blog',
            ];

        return view('backend.blog.list', compact('data'));
    }

    public function listView()
    {
        $data = BlogModel::getBlog();
        return view('backend.blog.list_view', compact('data'));
    }

    public function saveBlog(Request $request)
    {
        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $title = $request->input('title');
            $content = $request->input('content');
            $status = $request->input('aStatus');
            $user_id = Auth::user()->id;

            $filePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filePath = $file->store('uploads', 'public');
            }

            if(empty($hidden_id)):
                $saveData = [
                    'title' => $title,
                    'content' => $content,
                    'file_path' => $filePath,
                    'author' => $user_id,
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'published_at' => now(),
                ];

                ## Save data
                DB::table('blog')->insertGetId($saveData);
                $message='Blog saved successfully';

            else:

                $saveData = [
                    'title' => $title,
                    'content' => $content,
                    'file_path' => $filePath,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save data
                DB::table('blog')->where($condition)->update($saveData);
                $message='Blog updated successfully';

            endif;

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function editBlog($id)
    {
        $data = BlogModel::findBlog($id);
        // $password = dd($data->password);
        return response()->json(['data'=>$data, 'id'=>Crypt::encrypt($id)]);
    }

    public function deleteBlog($id)
    {
        try {
            $data = BlogModel::updateBlog($id);
            if($data)
            {
                $message='Blog deleted successfully';
                return response()->json(['status' => 200, 'message' => $message]);
            }else{
                $message='Something went wrong. Try again!';
                return response()->json(['status' => 450, 'message' => $message]);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

}
