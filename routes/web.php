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

Route::get('/', 'ContatoController@index');
Route::post('/enviar', 'ContatoController@enviar');
Route::get('/lista', ['middleware'=>'auth', 'uses'=>'ContatoController@lista']);

Route::get('auth/login', ['as' => 'auth.form', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);
