<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');

//user/
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::post('/upload', 'UserController@store')->name('users.store');///////////do upload
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::put('/users/update/{id}', 'UserController@update')->name('users.update');
Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
Route::get('/users/destroy/{id}', 'UserController@destroy')->name('users.destroy');

//products
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
Route::post('/products/store', 'ProductsController@store')->name('products.store');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products.edit');
Route::put('/products/update/{id}', 'ProductsController@update')->name('products.update');
Route::get('/products/show/{id}', 'ProductsController@show')->name('products.show');
Route::get('/products/destroy/{id}', 'ProductsController@destroy')->name('products.destroy');
