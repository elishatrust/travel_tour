<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;






##  Frontend
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');