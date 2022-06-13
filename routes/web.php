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
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/schedule-non', function () {
    return view('schedule-non');
});

Route::get('/class', function () {
    return view('class');
});

Route::get('/non-class', function () {
    return view('non-class');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/print', function () {
    return view('print');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/account', function () {
    return view('account');
});