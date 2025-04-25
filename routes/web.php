<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




#  FRONTEND
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/our-services', [FrontendController::class, 'services'])->name('services');
Route::get('/culture-experience', [FrontendController::class, 'culture_experience'])->name('culture');
Route::get('/latest-news', [FrontendController::class, 'latest_news'])->name('latest-news');
Route::get('/read-more-news/{id}', [FrontendController::class, 'read_more_news'])->name('read-more-news');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
// Route::get('/book-trip', [FrontendController::class, 'book_trip'])->name('book-trip');
Route::get('/contact.store', [FrontendController::class, 'book_trip'])->name('contact.store');
Route::post('/log-visit', [FrontendController::class, 'log_visit'])->name('log-visit');
Route::get('/visitor-count', [FrontendController::class, 'count_visitor'])->name('visitor-count');

#  AUTHENTICATION
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

#  RESET PASSWORD
Route::get('reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'resetPassword']);

#  PROFILE
// Route::get('admin/profile', [UserController::class, 'profile'])->name('admin.profile');
// Route::post('admin/profile', [UserController::class, 'update_password']);

#  BACKEND
Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){

        #  Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        #  User
        Route::get('/user', [UserController::class, 'list'])->name('user');
        Route::get('/user-view', [UserController::class, 'listView'])->name('user-view');
        Route::post('/user-save', [UserController::class, 'saveUser'])->name('user-save');
        Route::get('/user-edit/{id}', [UserController::class, 'editUser']);
        Route::get('/user-delete/{id}', [UserController::class, 'deleteUser']);

        #  Blog
        Route::get('/blog', [BlogController::class, 'list'])->name('blog');
        Route::get('/blog-view', [BlogController::class, 'listView'])->name('blog-view');
        Route::post('/blog-save', [BlogController::class, 'saveBlog'])->name('blog-save');
        Route::get('/blog-edit/{id}', [BlogController::class, 'editBlog']);
        Route::get('/blog-delete/{id}', [BlogController::class, 'deleteBlog']);

        #  Package
        Route::get('/package', [PackageController::class, 'list'])->name('package');
        Route::get('/package-view', [PackageController::class, 'listView'])->name('package-view');
        Route::post('/package-save', [PackageController::class, 'savePackage'])->name('package-save');
        Route::get('/package-edit/{id}', [PackageController::class, 'editPackage']);
        Route::get('/package-delete/{id}', [PackageController::class, 'deletePackage']);

        #  Booking
        Route::get('/booking', [BookingController::class, 'list'])->name('booking');
        Route::get('/booking-view', [BookingController::class, 'listView'])->name('booking-view');
        Route::get('/booking-delete/{id}', [BookingController::class, 'deleteBooking']);

        #  Contacts
        Route::get('/contacts', [ContactsController::class, 'list'])->name('contacts');
        Route::get('/contacts-view', [ContactsController::class, 'listView'])->name('contacts-view');
        Route::post('/contacts-save', [ContactsController::class, 'saveContact'])->name('contacts-save');
        Route::get('/contacts-edit/{id}', [ContactsController::class, 'editContact']);
        Route::get('/contacts-delete/{id}', [ContactsController::class, 'deleteContact']);

        #  Settings
        Route::get('/settings', [UserController::class,'index'])->name('settings');
        Route::get('/user-data', [UserController::class, 'userData'])->name('user-data');
    });

});


