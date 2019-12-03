<?php

Route::get('/','homeController@getHome');
Route::get('login', function () {return view('login');});
Route::get('logout', function () { return 'Logout usuari';});
Route::get('catalog','catalogController@getIndex');
Route::get('catalog/show/{id}', 'catalogController@getShow');
Route::get('catalog/create','catalogController@getCreate');
Route::get('catalog/edit/{id}','catalogController@getEdit');