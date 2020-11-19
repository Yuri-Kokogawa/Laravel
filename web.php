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

// 課題４ PHP/Laravel 09 Routingについて理解する
Route::get('XXX','Admin\AAAcontroller@bbb');

// 課題５ PHP/Laravel 09 Routingについて理解する
Route::get('admin/profile/create','Admin\ProfileController@add');
Route::get('admin/profile/edit','Admin\ProfileController@edit');
