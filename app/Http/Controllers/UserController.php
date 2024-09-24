<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'User',
            ];

        return view('backend.user.list', compact('data'));
    }

    public function listView()
    {
        $data = UserModel::getUser();
        return view('backend.user.list_view', compact('data'));
    }

    public function saveUser(Request $request)
    {
        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $name = $request->input('full_name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $address = $request->input('address');
            $password = $request->input('password');
            $status = $request->input('aStatus');
            $user_id = Auth::user()->id;

            if(empty($hidden_id)):
                $saveData = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'address' => $address,
                    'password' => Hash::make($password),
                    'status' => $status,
                    'remember_token' => rand(0,9999999999),
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'email_verified_at' => now(),
                ];

                ## Save data
                DB::table('users')->insertGetId($saveData);
                $message='User saved successfully';

            else:

                $saveData = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'address' => $address,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save data
                DB::table('users')->where($condition)->update($saveData);
                $message='User updated successfully';

            endif;

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function editUser($id)
    {
        $data = UserModel::findUser($id);
        // $password = dd($data->password);
        return response()->json(['data'=>$data, 'id'=>Crypt::encrypt($id)]);
    }

    public function deleteUser($id)
    {
        try {
            $data = UserModel::updateUser($id);
            if($data)
            {
                $message='User deleted successfully';
                return response()->json(['status' => 200, 'message' => $message]);
            }else{
                $message='Something went wrong. Try again!';
                return response()->json(['status' => 450, 'message' => $message]);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function userData()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $active = Auth::user()->archive == 0;

        switch ($active) {
            case 1:
                $data = [
                    'title' => 'Administrator',
                    'name' => $user->name,
                    'email'=> $user->email,
                ];
                break;
            default:
                $data = [
                    'title'=> 'Unknown User',
                    'name'=> $user->name,
                    'email'=> $user->email,
                ];
        }
        return response()->json(['data' => $data]);
    }

}
