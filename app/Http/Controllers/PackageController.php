<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function list()
    {
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'Package',
            ];

        return view('backend.package.list', compact('data'));
    }

    public function listView()
    {
        $data = PackageModel::getPackage();
        return view('backend.package.list_view', compact('data'));
    }

    public function savePackage(Request $request)
    {
        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $title = $request->input('package');
            $adult = $request->input('adult');
            $child = $request->input('child');
            $cost = $request->input('cost');
            $more = $request->input('more');
            $order_number = $request->input('order_number');
            $status = $request->input('aStatus');
            $user_id = Auth::user()->id;

            if(empty($hidden_id)):
                $saveData = [
                    'title' => $title,
                    'adult' => $adult,
                    'child' => $child,
                    'cost' => $cost,
                    'more' => $more,
                    'order_number' => $order_number,
                    'status' => $status,
                    'token' => rand(0,9999999999),
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                ## Save data
                DB::table('packages')->insertGetId($saveData);
                $message='Package saved successfully';

            else:

                $saveData = [
                    'title' => $title,
                    'adult' => $adult,
                    'child' => $child,
                    'cost' => $cost,
                    'more' => $more,
                    'order_number' => $order_number,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save data
                DB::table('packages')->where($condition)->update($saveData);
                $message='User updated successfully';

            endif;

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function editPackage($id)
    {
        $data = PackageModel::findPackage($id);
        return response()->json(['data'=>$data, 'id'=>Crypt::encrypt($id)]);
    }

    public function deletePackage($id)
    {
        try {
            $data = PackageModel::updatePackage($id);
            if($data)
            {
                $message='Package deleted successfully';
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
