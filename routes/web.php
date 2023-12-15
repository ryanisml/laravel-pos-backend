<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    })->name('home');

    // Route::get('/profile', function () {
    //     return view('pages.profile');
    // })->name('profile');

    // Route::get('/users', function () {
    //     return view('pages.users');
    // })->name('users');

    // Route::get('/roles', function () {
    //     return view('pages.roles');
    // })->name('roles');

    // Route::get('/permissions', function () {
    //     return view('pages.permissions');
    // })->name('permissions');

    // Route::get('/settings', function () {
    //     return view('pages.settings');
    // })->name('settings');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
