<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clientes/remove/{id}', 'ClienteController@remover')->name('clientes.remove');

Route::resource('clientes', 'ClienteController');

Route::resource('clientes_divulgacao', 'ClienteDivulgacaoController');

Route::get('/detalhar/{id}', 'ClienteController@detalhar')->name('detalhar');

Route::get('/pdf', 'PdfController@index')->name('pdf');

