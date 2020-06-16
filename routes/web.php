<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'SiteController@index')->name('site.index');

Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/index','DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/admin','DashboardController@admin')->name('dashboard.admin');

Route::get('/gii/generate', 'GiiController@generate')->name('gii.generate');
Route::get('/gii/model', 'GiiController@model')->name('gii.model');
Route::get('/gii/controller', 'GiiController@controller')->name('gii.controller');
Route::get('/gii/index', 'GiiController@index')->name('gii.index');
Route::get('/gii/read', 'GiiController@read')->name('gii.read');
Route::get('/gii/create', 'GiiController@create')->name('gii.create');
Route::get('/gii/update', 'GiiController@update')->name('gii.update');
Route::get('/gii/form', 'GiiController@form')->name('gii.form');
Route::get('/gii/route', 'GiiController@route')->name('gii.route');

Route::get('/user', 'UserController@index');
Route::get('/user/index', 'UserController@index')->name('user.index');
Route::get('/user/index', 'UserController@index')->name('user.index');
Route::get('/user/read', 'UserController@read')->name('user.read');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/create', 'UserController@create')->name('user.create');
Route::get('/user/update', 'UserController@update')->name('user.update');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/delete', 'UserController@delete')->name('user.delete');
Route::get('/user/reset-password', 'UserController@resetPassword')->name('user.reset-password');
Route::post('/user/reset-password', 'UserController@resetPassword')->name('user.reset-password');

Route::get('/user-role', 'UserRoleController@index');
Route::get('/user-role/index', 'UserRoleController@index')->name('user-role.index');
Route::get('/user-role/index/{page}', 'UserRoleController@index')->name('user-role.index');
Route::get('/user-role/read/{id}', 'UserRoleController@read')->name('user-role.read');
Route::get('/user-role/create', 'UserRoleController@create')->name('user-role.create');
Route::post('/user-role/create', 'UserRoleController@create')->name('user-role.create');
Route::get('/user-role/update/{id}', 'UserRoleController@update')->name('user-role.update');
Route::post('/user-role/update/{id}', 'UserRoleController@update')->name('user-role.update');
Route::get('/user-role/delete/{id}', 'UserRoleController@delete')->name('user-role.delete');
