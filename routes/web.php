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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::group(['prefix'=> 'admin','middleware' => 'auth', 'as' => 'admin.'],function(){
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('role', \App\Http\Controllers\RoleController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
});
Route::get('/', function () {
    return view('home');
});
Route::group(['prefix'=> 'customer','middleware' => 'auth', 'as' => 'customer.'],function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('index');
});



