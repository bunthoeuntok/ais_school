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

Route::get('/', 'System\DashboardController@index');
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
	Route::get('locale/{locale}', 'SettingController@locale')->name('locale');
	Route::get('year/{yearId}', 'SettingController@year')->name('year');
    Route::resource('languages', 'LanguageController');
});

Route::group([
	'prefix'		=> 'user-management',
    'as'			=> 'user-management.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'UserManagement'
], function () {
	Route::resource('roles', 'RoleController');
	Route::resource('users', 'UserController');
	Route::resource('modules', 'ModuleController');
	Route::resource('pages', 'PageController');
});

Route::group([
	'prefix'		=> 'school-setup',
    'as'			=> 'school-setup.',
    'middleware'	=> ['auth'],
    'namespace'		=> 'SchoolSetup'
], function () {
	Route::resource('branches', 'BranchController');
	Route::resource('campuses', 'BranchController');
	Route::resource('years', 'YearController');
});

