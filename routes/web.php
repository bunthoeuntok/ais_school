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
	'prefix'		=> 'system',
    'as'			=> 'system.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'System'
], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


Route::group([
	'prefix'		=> 'setting',
    'as'			=> 'setting.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'Setting'
], function () {
	Route::get('settings/locale/{locale}', 'SettingController@locale')->name('locale');
});

Route::group([
	'prefix'		=> 'user-management',
    'as'			=> 'user-management.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'User'
], function () {
	Route::resource('users', 'UserController');
});

