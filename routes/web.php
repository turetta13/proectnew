<?php
Route::get('/', 'PageController@index')->name('index');
Route::get('/register', 'PageController@acc');
Route::get('/check', 'PageController@check');
Route::get('/contact', 'PageController@contact');
Route::get('/product', 'PageController@products')->name('products');
Route::get('/single', 'PageController@single');
Route::get('/team', 'PageController@team');
Route::get('/faq', 'PageController@faq');
Route::get('/pay', 'PageController@pay');
Route::get('/delivery', 'PageController@delivery');
Route::get('/support', 'PageController@sup');

Route::get('/categories/{slug}', 'PageController@category')->name('categories.index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

