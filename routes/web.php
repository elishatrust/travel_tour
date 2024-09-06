<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



## AUTHENTICATION
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login']);

## RESET PASSWORD
Route::get('reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'resetPassword']);

## LOGOUT
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

## PROFILE
Route::get('user/profile', [AuthController::class, 'profile'])->name('profile');
Route::post('user/profile', [AuthController::class, 'update_password']);
Route::get('user/role', [AuthController::class, 'userRole']);



## Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
## ADMIN
Route::prefix('admin')->group(function () {
    ## Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    ## Admin
    // Route::get('/admin/list', [AdminController::class, 'list']);
    // Route::get('/admin/list_view', [AdminController::class, 'listView']);
});





## FRONTEND
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');