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

//Route::get('/', function () {return view('welcome');});
Route::get('/', 'App\Http\Controllers\BikeController@home')->name("bike.home");
Route::get('/showAll', 'App\Http\Controllers\BikeController@showAll')->name("bike.showAll");
Route::get('/create', 'App\Http\Controllers\BikeController@create')->name("bike.create");
Route::get('/success', 'App\Http\Controllers\BikeController@success')->name("bike.success");
Route::post('/save', 'App\Http\Controllers\BikeController@save')->name("bike.save");
Route::get('/show/{id}', 'App\Http\Controllers\BikeController@show')->name("bike.show");
Route::get('/remove/{id}', 'App\Http\Controllers\BikeController@remove')->name("bike.remove");
