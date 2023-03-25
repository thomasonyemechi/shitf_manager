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
Route::view('/searcshift/1', 'shiftdetails');
Route::view('/searcshiftdet', 'shiftdetails');
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/user/availability', 'users.availability');
Route::view('/user/autoassign', 'users.autoassign');
Route::view('/user/pay', 'users.pay');
route::view('/user/userdetails','users.userdetails');
route::view('/user/bookshifts','users.bookshifts');
route::view('/user/incomegoal','users.incomegoal');
route::view('/user/bankdetails','users.bankdetails');
route::view('/user/viewprofile','users.viewprofile');

Route::view('/admin/', 'admin.index');
Route::view('/admin/createshift', 'admin.createshift');
