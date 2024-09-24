<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('backend.dashboard', compact('data'));
    }

}
