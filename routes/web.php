<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('create',[TodoController::class,'create']);

Route::get('delete/{id}',[TodoController::class,'destroy']);
Route::post('store/{id}',[TodoController::class,'store']);
Route::get('edit/{id}',[TodoController::class,'edit']);
Route::post('update/{id}',[TodoController::class,'update'])->name('update');


Route::post('checklogin',[AdminController::class,'checklogin']);


