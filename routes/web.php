<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ContactController;
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
Route::get('/soon', function () { return view('frontend.comming_soon.index'); });



Route::middleware(['auth' ])->group(function () {

    Route::get('/admin/dashboard',[HomeController::class,'index']);
    Route::resource('/admin/contact', ContactController::class);


});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
