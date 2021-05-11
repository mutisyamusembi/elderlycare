<?php

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

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/','App\Http\Controllers\HomeController');
Route::get('/home','App\Http\Controllers\PagesController@index');
//Route::resource('/prep','App\Http\Controllers\PrepController');
Route::resource('/test','App\Http\Controllers\TestController');
Route::resource('/contact','App\Http\Controllers\ContactController');
Route::resource('/test2','App\Http\Controllers\Test2Controller');
Route::resource('/config','App\Http\Controllers\ConfigController')->middleware('auth');
Route::resource('/locationconf','App\Http\Controllers\LocationConfigController')->middleware('auth');
Route::resource('/prep','App\Http\Controllers\PrescriptionController')->middleware('auth');
Route::resource('/chart','App\Http\Controllers\ChartController')->middleware('auth');
Route::resource('/map','App\Http\Controllers\MapController')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
