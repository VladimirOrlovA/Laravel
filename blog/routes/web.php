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

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('get', function () {
    return '<h1>Get --  send method is GET </h1>';
});

Route::post('post', function () {
    return '<h1>Post --  send method is POST </h1>';
});

Route::match(['GET', 'POST'], 'test', function () {
    return '<h1>TEST --  send method is POST/GET </h1>';
});

Route::any('any', function () {
    return '<h1>ANY --  send method is Any methods  </h1>';
});

Route::get('form', 'ShagController@form');

Route::post('show', 'ShagController@show1');