<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_controller;

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
    return view('home');
});

Route::get('/about_me',[profile_controller::class,'about']);
Route::get('/projects',[profile_controller::class,'projects']);
Route::get('/contact',[profile_controller::class,'contact']);
