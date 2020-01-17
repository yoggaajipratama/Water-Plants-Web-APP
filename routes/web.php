<?php

Route::get('/', 'HumidityController@index' )->name('index');
Route::get('/grafik', 'HumidityController@grafik' )->name('grafik');
Route::post('/tahun', 'HumidityController@tahun' )->name('tahun');
Route::get('/tahunan', 'HumidityController@tahunan' )->name('tahunan');
Route::get('/remote', 'HumidityController@remote' )->name('remote');
