<?php

/*
Route::get('/page/{slug}', 'HomeController@index')->name('page.index')->where('slug', '[a-z0-9]+');
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@index')->name('search');

Route::get('/login', 'HomeController@index')->name('login');

Route::get('/register', 'HomeController@index')->name('register');

Route::get('/{slug}', 'PageController@index')
    ->name('frontend')
    ->where('slug', '[a-z0-9\-\/]+');
