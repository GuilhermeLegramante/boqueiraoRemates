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

Route::get('/clientes/remove/{id}', 'ClienteController@remover')->name('clientes.remove');

Route::resource('clientes', 'ClienteController');

Route::get('/pdf', 'PdfController@index')->name('pdf');

