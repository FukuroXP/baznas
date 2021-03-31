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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/table', function () {
    return view('bruh.index');
});

Route::get('/pdfo', function () {
    return view('bruh.pdfobject');
});

Route::get('/mpdf', function () {
    return view('bruh.mpdf');
});

Route::get('/embed', function () {
    return view('bruh.embed');
});
