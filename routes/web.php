<?php

Route::get('/', 'PageController@index')->name('index');

Route::get('/check', 'PageController@check')->name('check');

Route::get('/product', 'PageController@products')->name('products');

Route::get('/categories/{slug}', 'PageController@category')->name('categories');

Route::get('/info/{slug}', 'PageController@articles')->name('info');

Route::get('/product/{id}', 'PageController@single')->name('single');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//АДМИНКА
Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
Route::post('/profile/save', 'HomeController@profileSave')->name('profile.save');