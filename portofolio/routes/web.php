<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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



Route::get('/',[ProjectController::class,'index'])->name('user');
// Route::get('/admin',[ProjectController::class,'index2'])->name('admin');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('user');
