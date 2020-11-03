<?php


namespace App\Helpers;

use App\Models\Setting\Language;
use App\Models\UserManagement\Module;

class GlobalHelper
{
	public static function activeModule($segment = 1, $url = '')
	{
		return request()->segment($segment) == $url ? 'nav-item-expanded nav-item-open' : '';
	}

	public static function activePage($segment = 1, $url = '')
	{
		return request()->segment($segment) == $url ? 'active' : '';
	}

	public static function modules()
	{
		return Module::orderBy('order')->get();
	}

	public static function languages()
	{
		return Language::all();
	}
}
