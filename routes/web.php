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
Route::post('/profile/save/{id?}', 'HomeController@profileSave')->name('profile.save');
Route::get('/admin/list', 'HomeController@adminList')->name('admin.list');
Route::get('/profile/delete/{id}', 'HomeController@profileDelete')->name('profile.delete');
Route::get('/profile/create/', 'HomeController@profileCreate')->name('profile.create');


//АДМИНКА ТОВАРОВ
Route::get('/admin/products', 'ProductEditController@adminProducts')->name('admin.products');

//АДМИНКА ГЛАВНОГО МЕНЮ
Route::get('/admin/menu', 'MenuEditController@adminMenu')->name('admin.menu');
Route::get('/admin/menu/edit/{id}', 'MenuEditController@menuEdit')->name('menu.edit');
Route::post('/admin/menu/save/{id?}', 'MenuEditController@menuSave')->name('menu.save');
Route::get('/admin/menu/delete/{id}', 'MenuEditController@menuDelete')->name('menu.delete');
Route::get('/admin/menu/create/', 'MenuEditController@menuCreate')->name('menu.create');