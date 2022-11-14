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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('login');

Route::post('login','App\Http\Controllers\AuthController@Login');

// Route::post('loginForm','App\Http\Controllers\AuthController@Login')->name('login');

// Route::get('logout','App\Http\Controllers\AuthController@Logout);