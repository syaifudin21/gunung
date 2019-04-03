<?php

Route::get('home', 'Android\HomeController@index');
Route::get('gunung/{id}', 'Android\HomeController@gunungid');
