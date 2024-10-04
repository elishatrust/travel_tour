<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }
        
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'Dashboard'
            ];

        $user = DB::table('users')->where(['archive' => 0])->count();    
        $package = DB::table('packages')->where(['archive' => 0])->count();    
        $blog = DB::table('blog')->where(['archive' => 0])->count();    
        $booking = DB::table('book_trip')->where(['archive' => 0])->count();    

        return view('backend.dashboard', compact('data', 'user', 'blog', 'package','booking'));
    }

}
