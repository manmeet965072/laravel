<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\SignupController;

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
    return view('welcome');
});
Route::resource('post','App\Http\Controllers\PostController');
Route::post("user",[UserAuth::class,'userLogin']);
Route::post("register",[SignupController::class,'userRegister']);
Route::view("login",'login');
Route::view("profile",'profile');
Route::view("signup",'signup');
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');

    }
    return redirect('login');
});
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');

    }
    return view('login');
});
Route::get('/register', function () {
    if(session()->has('user'))
    {
        return redirect('profile');

    }
    return view('login');
});