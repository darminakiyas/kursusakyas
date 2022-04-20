<?php

use Illuminate\Support\Facades\Route;
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
});
// Route::get('/register', function () {
//     return view('layouts.login.register');
// });
Route::resource('/register', RegisterController::class);
