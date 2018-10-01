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
Route::get('l55', 'moj@l55');
Route::get('vue', 'moj@vue');
Route::get('moja', 'moj@moja');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
