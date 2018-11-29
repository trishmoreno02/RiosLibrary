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

Route::get('/search', 'SearchController@search');
Route::post('/borrow', 'HomeController@borrow');
Route::get('/return/{id}', 'HomeController@return');

Route::get('/admin/login', function(){
    return view('admin-login');
});

Route::post('/admin/login', 'Auth\AdminLoginController@login');

Route::get('/admin/dashboard', 'AdminController@index');
Route::post('/admin/addBook', 'AdminController@addBook');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
