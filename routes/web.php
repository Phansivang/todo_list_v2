<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
Auth::routes();
Route::resource('/',\App\Http\Controllers\TodoController::class);
Route::post('add/',[TodoController::class,'store']);
Route::get('edit/{id}',[TodoController::class,'edit']);
Route::put('update/{id}',[TodoController::class,'update']);
Route::delete('delete/{todotwo}',[TodoController::class,'delete']);
Route::get('post/',[TodoController::class,'post']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
