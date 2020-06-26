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
    return '<h1>hello cac ban</h1>';
});

Route::get('/aptech-php-23', 'Controller@index');

Route::get('/1', function () {
    return view('1');
});
Route::get('/2', function () {
    return view('2');
});