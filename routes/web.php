<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


## FRONTEND
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/latest-news', [FrontendController::class, 'latest_news'])->name('latest-news');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [FrontendController::class, 'terms_and_conditions'])->name('terms-and-conditions');


## AUTHENTICATION
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

## RESET PASSWORD
Route::get('reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'resetPassword']);

## PROFILE
// Route::get('admin/profile', [UserController::class, 'profile'])->name('admin.profile');
// Route::post('admin/profile', [UserController::class, 'update_password']);

## BACKEND
Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){

        ## Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        ## User
        Route::get('/user', [UserController::class, 'list'])->name('user');
        Route::get('/user-view', [UserController::class, 'listView'])->name('user-view');
        Route::post('/user-save', [UserController::class, 'saveUser'])->name('user-save');
        Route::get('/user-edit/{id}', [UserController::class, 'editUser']);
        Route::get('/user-delete/{id}', [UserController::class, 'deleteUser']);

        ## Blog
        Route::get('/blog', [BlogController::class, 'list'])->name('blog');
        Route::get('/blog-view', [BlogController::class, 'listView'])->name('blog-view');
        Route::post('/blog-save', [BlogController::class, 'saveBlog'])->name('blog-save');
        Route::get('/blog-edit/{id}', [BlogController::class, 'editBlog']);
        Route::get('/blog-delete/{id}', [BlogController::class, 'deleteBlog']);

        ## Settings
        Route::get('/settings', [UserController::class,'index'])->name('settings');
        Route::get('/user-data', [UserController::class, 'userData'])->name('user-data');
    });

});


