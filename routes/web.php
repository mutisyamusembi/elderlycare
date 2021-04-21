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
Route::resource('/config','App\Http\Controllers\ConfigController');
Route::resource('/locationconf','App\Http\Controllers\LocationConfigController');
Route::resource('/prep','App\Http\Controllers\PrescriptionController');