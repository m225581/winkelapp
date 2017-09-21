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

Route::get('/photo', function () {
    return view('photo');
});

Route::get('/instellingen', function () {
    return view('instellingen');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/photo', function () {
    return view('home');
});