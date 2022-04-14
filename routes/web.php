<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login routes
        Route::get('login',[AuthenticatedSessionController::class ,'create'])->name('login');
        Route::post('login',[AuthenticatedSessionController::class ,'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('home',[HomeController::class ,'index'])->name('home');
    });
    Route::get('logout',[AuthenticatedSessionController::class ,'destroy'])->name('logout');
});


