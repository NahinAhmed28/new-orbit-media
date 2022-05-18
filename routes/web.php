<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ContactController;
;
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

Route::get('/', function () { return view('frontend.home'); });
Route::get('/contact', function () { return view('frontend.contact'); });
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('usercontact.store');
Route::resource('/admin/contact', \App\Http\Controllers\ContactController::class);
Route::get('/soon', function () { return view('frontend.comming_soon.index'); });


    Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
        Route::get('/dashboard',[HomeController::class,'index']);
        Route::resource('/contact', ContactController::class);

    });







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
