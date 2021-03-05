<?php

use App\Http\Controllers\PostController;
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
// Route::resource('post','App\Http\Controllers\PostController');
Route::get("/create",[PostController::class,'create'])->name('create');
Route::get("/crud",[PostController::class,'index'])->name('crud');
Route::get("/edit/{id}",[PostController::class,'edit'])->name('edit');
Route::post("/update/{id}",[PostController::class,'update'])->name('update');
Route::delete("/delete/{id}",[PostController::class,'delete'])->name('delete');
Route::post("/store-user",[PostController::class,'storeUser'])->name('store.user');
Route::post("user",[UserAuth::class,'userLogin']);
Route::post("register",[SignupController::class,'userRegister']);
Route::view("login",'login');
//Route::view("crud",'crud');
Route::view("profile",'profile');
Route::view("signup",'signup');
// Route::get('/logout', function () {
//     if(session()->has('user'))
//     {
//         session()->pull('user');

//     }
//     return redirect('login');
// });
// Route::get('/login', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');

//     }
//     return view('login');
// });
// Route::get('/register', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');

//     }
//     return view('login');
// });