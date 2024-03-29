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
Route::get('/apk/download', 'ApkController@getDownload');

Route::post('/upload/gambar', 'ImagesController@upload')->name('upload.gambar');
Route::post('/galeri/store', 'ImagesController@store')->name('galeri.store');
Route::delete('/galeri/delete/{id}', 'ImagesController@delete')->name('galeri.delete');

Route::get('/berita/{id}', 'Android\ViewController@viewberita')->name('beritaid');
Route::get('/gunung/{id}', 'Android\HomeController@viewgunung')->name('gunungid');
