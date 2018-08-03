<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clientes/remove/{id}', 'ClienteController@remover')->name('clientes.remove');

Route::get('/clientes_divulgacao/remove/{id}', 'ClienteDivulgacaoController@remover')->name('clientes_divulgacao.remove');

Route::resource('clientes', 'ClienteController');

Route::resource('clientes_divulgacao', 'ClienteDivulgacaoController');

Route::get('/detalhar/{id}', 'ClienteController@detalhar')->name('detalhar');

Route::get('/pdf', 'PdfController@index')->name('pdf');

Route::get('/viraCliente/{id}', 'ClienteDivulgacaoController@viraCliente')->name('viraCliente');

