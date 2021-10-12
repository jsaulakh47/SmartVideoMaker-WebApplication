<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/video-maker', [App\Http\Controllers\VideoController::class, 'videoMaker']);
Route::get('/video-url', [App\Http\Controllers\VideoController::class, 'videoUrl']);
Route::get('/video-list', [App\Http\Controllers\VideoController::class, 'videoList']);
Route::get('/my-account', [App\Http\Controllers\HomeController::class, 'viewAccount']);
