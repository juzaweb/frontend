<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@index')->name('search');
Route::get('/page/{slug}', 'HomeController@index')->name('page.index')->where('slug', '[a-z0-9]+');
Route::get('/login', 'HomeController@index')->name('login');
Route::get('/register', 'HomeController@index')->name('register');