<?php

Route::get('/', function(){
    return view('index');
});
//Route::resource('account', 'AccountController');
Route::resource('contacts', 'ContactsController');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('account/{id}/edit', 'AccountController@edit');
Route::patch('account/{id}/edit', 'AccountController@update');