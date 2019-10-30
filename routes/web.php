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

Route::get('/hello', 'HelloController@index')->name('hello.index');

// Home
Route::get('/home', 'Home\IndexController@index');
Route::get('/home/test/index', 'Home\TestController@index')->name('hoem.test.index');
Route::get('/home/test/test', 'Home\TestController@test')->name('home.test.test');
Route::get('/home/test/edit', 'Home\TestController@edit')->name('home.test.edit');
Route::post('/home/test/store', 'Home\TestController@store')->name('home.test.store');
Route::get('/home/test/dbtest', 'Home\TestController@dbtest')->name('home.test.dbtest');

// Resource Controller
Route::resource('test', 'TestController');
