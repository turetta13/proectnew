<?php

Route::get('/', 'PageController@index')->name('index');

Route::get('/check', 'PageController@check')->name('check');

Route::get('/product', 'PageController@products')->name('products');

Route::get('/categories/{slug}', 'PageController@category')->name('categories');

Route::get('/info/{slug}', 'PageController@articles')->name('info');

Route::get('/product/{id}', 'PageController@single')->name('single');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//АДМИНКА ПОЛЬЗОВАТЕЛЕЙ
Route::get('/profile/edit/{id}', 'HomeController@profileEdit')->name('profile.edit');
Route::post('/profile/save/{id}', 'HomeController@profileSave')->name('profile.save');
Route::get('/admin/list', 'HomeController@adminList')->name('admin.list');
Route::get('/profile/delete/{id}', 'HomeController@profileDelete')->name('profile.delete');
//Route::get('/profile/create/{id}', 'HomeController@')->name('profile.create');profileCreate


//АДМИНКА ТОВАРОВ
Route::get('/admin/products', 'ProductEditController@adminProducts')->name('admin.products');