<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
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

            $validated = $request->validate([
                '_title' => 'required|string|max:255',
                'content' => 'required|string',
                'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'aStatus' => 'nullable|string',
                'hidden_id' => 'nullable|string'
            ]);

            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $title = $request->input('_title');
            $content = $request->input('content');
            $status = $request->input('aStatus');
            $user_id = Auth::user()->id;

            $filePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/uploads'), $fileName);
                $filePath = 'assets/uploads/' . $fileName;
            }

            if (empty($hidden_id)) {
                $saveData = [
                    'title' => $title,
                    'content' => $content,
                    'file_path' => $filePath,
                    'tokens' => rand(1, 9999999999),
                    'author' => $user_id,
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'status' => $status,
                    'archive' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'published_at' => now(),
                ];

                // Save data
                DB::table('blog')->insertGetId($saveData);
                $message = 'Blog saved successfully';
            } else {
                $saveData = [
                    'title' => $title,
                    'content' => $content,
                    'file_path' => $filePath,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                if ($filePath) {
                    $saveData['file_path'] = $filePath;
                }
                $condition = [
                    'id' => Crypt::decrypt($hidden_id),
                    'archive' => 0,
                ];

                // Update data
                DB::table('blog')->where($condition)->update($saveData);
                $message = 'Blog updated successfully';
            }

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
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
