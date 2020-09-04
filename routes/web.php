<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Scaffolding
|--------------------------------------------------------------------------
*/
Auth::routes([
	'register' => false,
	'reset' => false
]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
