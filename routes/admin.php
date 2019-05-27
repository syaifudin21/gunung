<?php

Route::get('/', 'Admin\HomeController@index')->name('admin.home');
Route::get('/login', 'Admin\LoginController@form');
Route::post('/login', 'Admin\LoginController@login')->name('admin.login');
Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::get('/gunung', 'Admin\GunungController@index')->name('admin.gunung');
Route::get('/gunung/publish', 'Admin\GunungController@publish')->name('admin.gunung.publish');
Route::get('/gunung/tambah', 'Admin\GunungController@create')->name('admin.gunung.create');
Route::get('/gunung/show/{id}', 'Admin\GunungController@show')->name('admin.gunung.show');
Route::post('/gunung/tambah', 'Admin\GunungController@store')->name('admin.gunung.store');
Route::get('/gunung/edit/{id}', 'Admin\GunungController@edit')->name('admin.gunung.edit');
Route::put('/gunung/update', 'Admin\GunungController@update')->name('admin.gunung.update');
Route::delete('/gunung/delete/{id}', 'Admin\GunungController@delete')->name('admin.gunung.delete');

Route::get('/berita', 'Admin\BeritaController@index')->name('admin.berita');
Route::get('/berita/publish', 'Admin\BeritaController@publish')->name('admin.berita.publish');
Route::get('/berita/tambah', 'Admin\BeritaController@create')->name('admin.berita.create');
Route::get('/berita/show/{id}', 'Admin\BeritaController@show')->name('admin.berita.show');
Route::post('/berita/tambah', 'Admin\BeritaController@store')->name('admin.berita.store');
Route::get('/berita/edit/{id}', 'Admin\BeritaController@edit')->name('admin.berita.edit');
Route::put('/berita/update', 'Admin\BeritaController@update')->name('admin.berita.update');
Route::delete('/berita/delete/{id}', 'Admin\BeritaController@delete')->name('admin.berita.delete');

Route::get('/user', 'Admin\UserController@index')->name('admin.user');
Route::get('/user/publish', 'Admin\UserController@publish')->name('admin.user.publish');
Route::get('/user/tambah', 'Admin\UserController@create')->name('admin.user.create');
Route::get('/user/show/{id}', 'Admin\UserController@show')->name('admin.user.show');
Route::post('/user/tambah', 'Admin\UserController@store')->name('admin.user.store');
Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('admin.user.edit');
Route::put('/user/update', 'Admin\UserController@update')->name('admin.user.update');
Route::delete('/user/delete/{id}', 'Admin\UserController@delete')->name('admin.user.delete');
