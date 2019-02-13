<?php

//AdminController Panel Administrativo
Route::resource('admin','AdminController');

//FrontController Solicitante
Route::resource('solicitud','SolicitudController');
Route::get('/','FrontController@welcome')->name('welcome');
Route::get('home','FrontController@home')->name('home');

//LoginController Login de Pagina
Route::resource('login','LogController');
Route::get('logout','LogController@logout')->name('logout');