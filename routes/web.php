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

Route::get('/home', function () {
    return view('home');
});

Route::get('/soap_dataaccess', function () {
    return view('soap_dataaccess');
});

Route::get('/serialize', function () {
    return view('serialize');
});

Route::get('/js_demo', function () {
    return view('js_demo');
});
