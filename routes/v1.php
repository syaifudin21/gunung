<?php

Route::get('home', 'Android\HomeController@index');
Route::get('gunung/{id}', 'Android\HomeController@gunungid');

Route::get('berita', 'Android\HomeController@berita');
Route::get('gunung', 'Android\HomeController@gunung');
