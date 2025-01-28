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
Route::get('/mtk', [FrontendController::class, 'mt_kili_trek'])->name('mtk');
Route::get('/trekking', [FrontendController::class, 'trekking'])->name('trekking');
Route::get('/latest-news', [FrontendController::class, 'latest_news'])->name('latest-news');
Route::get('/read-more-news/{id}', [FrontendController::class, 'read_more_news'])->name('read-more-news');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [FrontendController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/frequently-asked-questions', [FrontendController::class, 'faqs'])->name('faqs');
Route::post('/get-package', [FrontendController::class, 'get_package'])->name('get-package');
Route::get('/plan-trip', [FrontendController::class, 'plan_trip'])->name('plan-trip');
Route::post('/save-trip', [FrontendController::class, 'save_trip'])->name('save-trip');
Route::post('/log-visit', [FrontendController::class, 'log_visit'])->name('log-visit');
Route::get('/visitor-count', [FrontendController::class, 'count_visitor'])->name('visitor-count');

# MT MERU
Route::get('/3-days-mount-meru-trek', [FrontendController::class, '_3_days_mt_meru'])->name('3-days-mount-meru-trek');
Route::get('/4-days-mount-meru-trek', [FrontendController::class, '_4_days_mt_meru'])->name('4-days-mount-meru-trek');

# MT KILIMANJARO
Route::get('/5-days-marangu-trek', [FrontendController::class, '_5_days_marangu'])->name('5-days-marangu-trek');
Route::get('/6-days-marangu-trek', [FrontendController::class, '_6_days_marangu'])->name('6-days-marangu-trek');
Route::get('/5-days-umbwe-trek', [FrontendController::class, '_5_days_umbwe'])->name('5-days-umbwe-trek');
Route::get('/6-days-umbwe-trek', [FrontendController::class, '_6_days_umbwe'])->name('6-days-umbwe-trek');
Route::get('/6-days-machame-trek', [FrontendController::class, '_6_days_machame'])->name('6-days-machame-trek');
Route::get('/7-days-machame-trek', [FrontendController::class, '_7_days_machame'])->name('7-days-machame-trek');
Route::get('/6-days-rongai-trek', [FrontendController::class, '_6_days_rongai'])->name('6-days-rongai-trek');
Route::get('/7-days-rongai-trek', [FrontendController::class, '_7_days_rongai'])->name('7-days-rongai-trek');
Route::get('/7-days-lemosho-trek', [FrontendController::class, '_7_days_lemosho'])->name('7-days-lemosho-trek');
Route::get('/8-days-lemosho-trek', [FrontendController::class, '_8_days_lemosho'])->name('8-days-lemosho-trek');
Route::get('/8-days-northern-circuit-trek', [FrontendController::class, '_8_days_northern_circuit'])->name('8-days-northern-circuit-trek');
Route::get('/9-days-northern-circuit-trek', [FrontendController::class, '_9_days_northern_circuit'])->name('9-days-northern-circuit-trek');

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
        Route::get('/contacts-delete/{id}', [ContactsController::class, 'deleteContacts']);

        #  Settings
        Route::get('/settings', [UserController::class,'index'])->name('settings');
        Route::get('/user-data', [UserController::class, 'userData'])->name('user-data');
    });

});


