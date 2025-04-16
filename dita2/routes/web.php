<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/shkolla',function() {
    return "<h1>Shkolla Digjitale Prizren</h1>";
});

Route::any('/home2', function () {
    return view('home');
});

//Parameter Required
Route::get('/admin/{id}', function ($id) {
    return "Admin Page with ID: $id";

Route::get('/admin2/{name?}', function ($name = "Tarik") {
    return "Admin Page with name: $name";

Route::get('/user/{id}', function ($id) {
    return "Admin Page with ID: $id";
})->where('id','[0-9]+');

Route::get('/user2/{name?}', function ($name = "Tarik") {
    return "Admin Page with name: $name";
})->where('name','[a-z,A-Z]+');