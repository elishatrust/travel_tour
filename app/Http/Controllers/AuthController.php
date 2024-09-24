<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Upzone Safaris',
            'header' => 'Login'
        ];
        $user = Auth::user();

        if(!empty(Auth::check()))
        {
            if ($user->archive == 0)
            {
                return redirect()->route('dashboard');
            }
        }else{
            return view('backend.auth.login', compact('data'));
        }
        return view('backend.auth.login', compact('data'));
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->errors()
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => 200,
                'message' => 'Login Successfully',
                'redirect_url' => route('dashboard')
            ]);
        }

        return response()->json([
            'status' => 500,
            'message' => 'Invalid Email or Password'
        ]);
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:3',
    //     ]);
    
    //     if (Auth::attempt($credentials) && Auth::user()->archive == 0) {
    //         $request->session()->regenerate();
    //         return response()->json(['redirect' => route('dashboard')], 200);
    //     }
    //     return response()->json(['errors' => ['loginError' => 'Invalid username or password.']], 422);
    // }

    public function reset_password()
    {
        $data = [
            'title' => 'Travel & Tour',
            'header' => 'Reset Password'
        ];
        return view('backend.auth.reset', compact('data'));
    }

    // public function forgotPassword(Request $request)
    // {
    //     $user = AdminModel::checkEmail($request->email);

    //     if(!empty($user))
    //     {
    //         $user->remember_token = Str::random(30);
    //         $user->save();
    //         Mail::to($user->email)->send(new ForgotPasswordMail($user));
    //         return redirect()->back()->with("success", "Please check your email and reset your password");

    //     }
    //     else
    //     {
    //         return redirect()->back()->with("error", "Email not found in the system");
    //     }

    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'My Profile'
        ];
        return view('profile.index', compact('data'));
    }

    // public function userRole()
    // {
    //     $data = AdminModel::getUserRole();
    //     return $data;
    // }
    
}
