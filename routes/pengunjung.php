<?php

Route::get('/', 'Pengunjung\HomeController@index')->name('pengunjung.home');
Route::get('/login', 'Pengunjung\LoginController@form');
Route::post('/daftar', 'Pengunjung\LoginController@daftar')->name('pengunjung.daftar');
Route::post('/login', 'Pengunjung\LoginController@login')->name('pengunjung.login');
Route::post('/logout', 'Pengunjung\LoginController@logout')->name('pengunjung.logout');
Route::get('/profil/{username}', 'Pengunjung\ProfilController@profil')->name('pengunjung.profil');

Route::get('/gunung', 'Pengunjung\GunungController@index')->name('pengunjung.gunung');
Route::get('/gunung/tambah', 'Pengunjung\GunungController@create')->name('pengunjung.gunung.create');
Route::get('/gunung/show/{id}', 'Pengunjung\GunungController@show')->name('pengunjung.gunung.show');
Route::post('/gunung/tambah', 'Pengunjung\GunungController@store')->name('pengunjung.gunung.store');
Route::get('/gunung/edit/{id}', 'Pengunjung\GunungController@edit')->name('pengunjung.gunung.edit');
Route::put('/gunung/update', 'Pengunjung\GunungController@update')->name('pengunjung.gunung.update');
Route::delete('/gunung/delete/{id}', 'Pengunjung\GunungController@delete')->name('pengunjung.gunung.delete');

Route::get('/berita', 'Pengunjung\BeritaController@index')->name('pengunjung.berita');
Route::get('/berita/publish', 'Pengunjung\BeritaController@publish')->name('pengunjung.berita.publish');
Route::get('/berita/tambah', 'Pengunjung\BeritaController@create')->name('pengunjung.berita.create');
Route::get('/berita/show/{id}', 'Pengunjung\BeritaController@show')->name('pengunjung.berita.show');
Route::post('/berita/tambah', 'Pengunjung\BeritaController@store')->name('pengunjung.berita.store');
Route::get('/berita/edit/{id}', 'Pengunjung\BeritaController@edit')->name('pengunjung.berita.edit');
Route::put('/berita/update', 'Pengunjung\BeritaController@update')->name('pengunjung.berita.update');
Route::delete('/berita/delete/{id}', 'Pengunjung\BeritaController@delete')->name('pengunjung.berita.delete');
Route::post('/berita/komentar/tambah', 'Pengunjung\BeritaController@komentarstore')->name('pengunjung.komentar.store');
