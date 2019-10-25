<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'UsersController@index');
Route::get('register', 'UsersController@other');
