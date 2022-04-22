<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('layouts.main');
});
Route::get('/login', function () {
    return view('login.login', [
        'title' => 'Login'
    ]);
})->name('login')->middleware('guest');

Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware('auth');

Route::resource('/register', RegisterController::class);
Route::resource('/kelas', KelasController::class);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
