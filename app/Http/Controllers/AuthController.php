<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Travel & Tour',
            'header' => 'Login'
        ];
        $user = Auth::user();

        if(!empty(Auth::check()))
        {
            if ($user->archive == 0)
            {
                return redirect('admin/dashboard');
            }
        }else{
            return view('backend.auth.login', compact('data'));
        }
        return view('backend.auth.login', compact('data'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:10',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

            if (Auth::user()->archive == 0) 
            {
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->with('error', 'Incorrect Email or Password');
                // return back()->withErrors(['loginError' => 'Invalid username or password']);
            }
        }
        return redirect()->back()->with('error', 'Incorrect Email or Password');
        // return back()->withErrors(['loginError' => 'Invalid username or password']);
    }

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
