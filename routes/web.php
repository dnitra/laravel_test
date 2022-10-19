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


Route::get('/', ['App\Http\Controllers\HomePageController', 'homePage']);
Route::get('/search', ['App\Http\Controllers\HomePageController', 'search']);
Route::get('/movie', ['App\Http\Controllers\MovieController', 'search']);
Route::post('/movie', ['App\Http\Controllers\MovieController', 'handleForm']);
