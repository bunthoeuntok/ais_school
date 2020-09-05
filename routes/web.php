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
	'prefix'		=> 'settings',
    'as'			=> 'settings.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'Setting'
], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

