<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/reservar', 'ReservaController@index')->name('reservar');

Route::get('/admin', 'AdminController@index')->name('admin');
