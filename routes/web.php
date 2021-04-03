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

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/centerofexcellence', function () {
    return view('centerofexcellence');
});

Route::get('/conselt', function () {
    return view('conselt');
});

Route::get('/consultonline', function () {
    return view('consultonline');
});


Route::get('/multispeciality', function () {
    return view('multispeciality');
});

Route::get('/postquery', function () {
    return view('postquery');
});


Route::get('/contact', function () {
    return view('contact');
});

