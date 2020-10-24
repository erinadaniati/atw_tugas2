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

Route::get('/layout', function () {
    return view('layouts/layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/belijus', function () {
    return view('belijus');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/kontakkami', function () {
    return view('kontakkami');
});

Route::get('/login', function () {
    return view('login');
});