<?php

Route::get('/', 'Pengunjung\HomeController@index')->name('pengunjung.home');
Route::get('/login', 'Pengunjung\LoginController@form');
Route::post('/login', 'Pengunjung\LoginController@login')->name('pengunjung.login');
Route::post('/logout', 'Pengunjung\LoginController@logout')->name('pengunjung.logout');
