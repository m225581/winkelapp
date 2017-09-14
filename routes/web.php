<?php

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
    return view('home');
});

Route::get('/kleding', function () {
    return view('kleding');
});

Route::get('/winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/contacten', function () {
    return view('contacten');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/kleding-mannen', function () {
    return view('kleding-mannen');
});

Route::get('/kleding-vrouwen', function () {
    return view('kleding-vrouwen');
});

Route::get('/kleding-sport', function () {
    return view('kleding-sport');
});

Route::get('/kleding-kinderen', function () {
    return view('kleding-kinderen');
});

Route::get('/kleding-babies', function () {
    return view('kleding-babies');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
