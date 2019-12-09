<?php

Auth::routes();
Route::get('/','HomeController@getHome');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout','Auth\Logincontroller@logout');
    Route::get('catalog','catalogController@getIndex');
    Route::get('catalog/show/{id}', 'catalogController@getShow');
    Route::get('catalog/create','catalogController@getCreate');
    Route::post('catalog/create','catalogController@postCreate');
    Route::get('catalog/edit/{id}','catalogController@getEdit');
    Route::put('catalog/edit/{id}','catalogController@putEdit');
});
