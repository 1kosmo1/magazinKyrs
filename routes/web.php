<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/index');
});



Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::group(['namespace'=>'Product'],function(){
        Route::get('/products','ProductController@index')->name('admin.products.index');
        Route::get('/products/create','ProductController@create')->name('admin.products.create');
        Route::post('/products','ProductController@store')->name('admin.products.store');
        Route::get('/products/{product}','ProductController@show')->name('admin.products.show');
        Route::get('/products/{product}/edit','ProductController@edit')->name('admin.products.edit');
        Route::post('/products/{product}','ProductController@update')->name('admin.products.update');
        Route::delete('/products/{product}','ProductController@destroy')->name('admin.products.delete');
    });

    Route::group(['namespace'=>'Category'],function(){
        Route::get('/categories','CategoryController@index')->name('admin.categories.index');
        Route::get('/categories/create','CategoryController@create')->name('admin.categories.create');
        Route::post('/categories','CategoryController@store')->name('admin.categories.store');
        Route::get('/categories/{category}','CategoryController@show')->name('admin.categories.show');
        Route::get('/categories/{category}/edit','CategoryController@edit')->name('admin.categories.edit');
        Route::patch('/categories/{category}','CategoryController@update')->name('admin.categories.update');
        Route::delete('/categories/{category}','CategoryController@destroy')->name('admin.categories.delete');
    });

    Route::group(['namespace'=>'Marker'],function(){
        Route::get('/markers','MarkerController@index')->name('admin.markers.index');
        Route::get('/markers/create','MarkerController@create')->name('admin.markers.create');
        Route::post('/markers','MarkerController@store')->name('admin.markers.store');
        Route::get('/markers/{marker}','MarkerController@show')->name('admin.markers.show');
        Route::get('/markers/{marker}/edit','MarkerController@edit')->name('admin.markers.edit');
        Route::patch('/markers/{marker}','MarkerController@update')->name('admin.markers.update');
        Route::delete('/markers/{marker}','MarkerController@destroy')->name('admin.markers.delete');
    });
});















