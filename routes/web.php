<?php

Auth::routes();
Route::get('/','homeController@getHome');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home','homeController@getHome');
    Route::get('/logout','Auth\Logincontroller@logout');
    Route::get('catalog','catalogController@getIndex');
    Route::get('catalog/show/{id}', 'catalogController@getShow');
    Route::get('catalog/create','catalogController@getCreate');
    Route::post('catalog/create','catalogController@postCreate');
    Route::get('catalog/edit/{id}','catalogController@getEdit');
    Route::put('catalog/edit/{id}','catalogController@putEdit');


    Route::put('catalog/return/{id}','catalogController@putReturn');
    Route::put('catalog/rent/{id}','catalogController@putRent');
    Route::delete('catalog/{id}','catalogController@deleteMovie');

    Route::get('genre','genreController@getIndex');
    Route::get('genre/create','genreController@getCreate');
    Route::post('genre/create','genreController@postCreate');
    Route::get('genre/edit/{id}','genreController@getEdit');
    Route::put('genre/edit/{id}','genreController@putEdit');
    Route::get('genre/delete/{id}','genreController@delete');
});

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
