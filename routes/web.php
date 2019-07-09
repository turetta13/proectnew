<?php

Route::get('/', 'PageController@index')->name('index');

Route::get('/check', 'PageController@check')->name('check');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/product', 'PageController@products')->name('products');

Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/pay', 'PageController@pay')->name('pay');
Route::get('/delivery', 'PageController@delivery')->name('delivery');
Route::get('/support', 'PageController@sup')->name('support');

Route::get('/categories/{slug}', 'PageController@category')->name('categories');
Route::get('/info/{slug}', 'PageController@articles')->name('info');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{id}', 'PageController@single')->name('single');

