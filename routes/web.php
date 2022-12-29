<?php

use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'welcome']);

Route::get('/home',[HomeController::class,'index']);

Route::post('/upload',[HomeController::class,'uploaddata']);

Route::get('/view',[HomeController::class,'viewdata']);

Route::get('/delete/{id}',[HomeController::class,'delete']);

Route::get('/search',[HomeController::class,'search']);

Route::get('/update_view/{id}',[HomeController::class,'update_view']);

Route::post('/update/{id}',[HomeController::class,'update_data']);