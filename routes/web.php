<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin.login');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // admin logout
    Route::post('admin-logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('is_admin');

    // Rooms route
    Route::get('room/create', [RoomController::class, 'create'])->name('room.create');
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
