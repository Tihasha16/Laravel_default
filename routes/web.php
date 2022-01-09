<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin.login');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('is_admin');
});


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// frontend controller
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('home/', 'HomePagecontroller@showHomePage')->name('home.show');
    // Route::get('login/', 'HomePagecontroller@showloginPage') -> name('login.show');
    // Route::get('register/', 'HomePagecontroller@showRegisterPage') -> name('register.show');
    Route::get('contact/', 'HomePagecontroller@showContactPage')->name('contact.show');
    Route::get('room/', 'HomePagecontroller@showRoomPage')->name('room.show');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
