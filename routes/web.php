<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CreateShiftIndex;
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

Route::get('/', [UserController::class, 'searchShiftIndex']);

Route::get('/searcshift', [UserController::class, 'searchShiftIndex']);
Route::get('/searcshift/{id}', [UserController::class, 'detialIndex']);
Route::post('/requestShift', [ShiftController::class, 'acceptShift']);
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
route::get('/user/bookshifts',[UserController::class, 'bookShiftsIndex']);
route::view('/user/incomegoal','users.incomegoal');
route::view('/user/bankdetails','users.bankdetails');
route::view('/user/viewprofile','users.viewprofile');

Route::group(['middleware' => ['auth']], function () {
    Route::view('/user/', 'users.index');

    Route::view('/user/availability', 'users.availability');
    Route::view('/user/autoassign', 'users.autoassign');
    Route::view('/user/pay', 'users.pay');
    Route::view('/user/timesheet', 'users.timesheet');


    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
        Route::get('/', [AdminController::class, 'index']);

        Route::get('/usersrequest', [AdminController::class, 'requestIndex']);
        Route::get('/genusers', [AdminController::class, 'genusers']);
        Route::get('/approve_user/{id}', [AdminController::class, 'approveSingle']);

        Route::get('/active_users', [AdminController::class, 'activeUserIndex']);


        Route::get('/shift/request', [AdminController::class, 'shiftRequestIndex']);
        Route::get('/shift/create', [ShiftController::class, 'createIndex']);
        Route::get('/shift/{id}', [AdminController::class, 'shiftDetailsIndex']);
        Route::post('/createshift', [ShiftController::class, 'createShift']);
        Route::post('/approve_shift_request', [AdminController::class, 'approveMultiple']);
        Route::get('/approve_single_shift/{id}', [AdminController::class, 'approveSingleShift']);
        Route::get('/reject_single_shift/{id}', [AdminController::class, 'rejectSingleShift']);
        

        
    });


});
