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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ProjectController::class,'index'])->name('home');
Route::get('/create',[ProjectController::class,'create'])->name('create');
Route::post('/store',[ProjectController::class,'store'])->name('store');
Route::get('/show',[ProjectController::class,'show'])->name('show');
Route::get('/edit/{id}',[ProjectController::class,'edit'])->name('edit');
Route::post('/update/{id}',[ProjectController::class,'update'])->name('update');
Route::resource('todos', ProjectController::class);
Route::get('/delete/{id}',[ProjectController::class,'destroy'])->name('delete');

