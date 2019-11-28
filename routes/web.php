<?php

Route::get('/', function () { return view('home');});
Route::get('login', function () {return view('login');});
Route::get('logout', function () { return 'Logout usuari';});
Route::get('catalog', function () { return view('index');});
Route::get('catalog/show/{id}', function ($id) { return view('show',['pelicula'=>$id]);});
Route::get('catalog/create', function () { return view('create');});
Route::get('catalog/edit/{id}', function ($id) {return view('edit',['pelicula' =>$id]);});