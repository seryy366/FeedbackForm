<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::group(['middleware'=>'verified'],function (){
    Route::get('/home', [\App\Http\Controllers\MainController::class, 'index'])->name('home.index');
    Route::resource('/message',\App\Http\Controllers\MessageController::class);
});



Route::group(['middleware'=>'guest'],function (){
    Route::get('/register', [\App\Http\Controllers\UserController::class,'create'])->name('register.create');
    Route::post('/register', [\App\Http\Controllers\UserController::class,'store'])->name('register.store');
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::get('/', function () {
        return view('index');
    })->name('home');
});

//    ->middleware('auth');
Route::group(['middleware'=>'auth'],function (){
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});



Route::get('/email/verify', function () {
    return view('/auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
use Illuminate\Http\Request;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

