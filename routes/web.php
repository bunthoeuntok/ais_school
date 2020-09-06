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

Route::group([
	'prefix'		=> 'setting',
    'as'			=> 'setting.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'Setting'
], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group([
	'prefix'		=> 'user-management',
    'as'			=> 'user-management.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'User'
], function () {
	Route::resource('users', 'UserController');
});

