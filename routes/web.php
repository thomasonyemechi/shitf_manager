<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::view('/searcshift', 'searchjobs');
Route::view('/searcshift/1', 'shiftdetails');
Route::view('/searcshiftdet', 'shiftdetails');


Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'loginUser']);

Route::view('/signup', 'signup');
Route::post('/join', [AuthController::class, 'requestToJoin']);

Route::view('/forgot-password', 'forgot_password');


Route::view('/user/availability', 'users.availability');
Route::view('/user/autoassign', 'users.autoassign');
Route::view('/user/pay', 'users.pay');
route::view('/user/userdetails','users.userdetails');
route::view('/user/bookshifts','users.bookshifts');
route::view('/user/incomegoal','users.incomegoal');
route::view('/user/bankdetails','users.bankdetails');
route::view('/user/viewprofile','users.viewprofile');

Route::group(['middleware' => ['auth']], function () {
    Route::view('/user/dashboard', 'users.index');

    Route::view('/user/availability', 'users.availability');
    Route::view('/user/autoassign', 'users.autoassign');
    Route::view('/user/pay', 'users.pay');


    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
        Route::view('/', 'admin.index');
        Route::view('/createshift', 'admin.createshift');
        Route::get('/usersrequest', [AdminController::class, 'requestIndex']);
        Route::get('/genusers', [AdminController::class, 'genusers']);
        Route::get('/approve_user/{id}', [AdminController::class, 'approveSingle']);
    });
});
