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

Route::view('/user/dashboard', 'users.index');
Route::view('/searcshift', 'searchjobs');
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/user/availability', 'users.availability');
Route::view('/user/autoassign', 'users.autoassign');
Route::view('/user/pay', 'users.pay');


Route::view('/admin/', 'admin.index');
