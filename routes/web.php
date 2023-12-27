<?php

use App\Models\Santri;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginRegisterController;

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
    return view('welcome');
});


Route::resource('/landing',LandingController::class);


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::middleware('mustBeLoggedIn')->group(function () {
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/santris', \App\Http\Controllers\SantriController::class);
    Route::resource('/masters', \App\Http\Controllers\MasterController::class);
});

// Route::fallback(function () {
//     return view('errors.404');
// });

