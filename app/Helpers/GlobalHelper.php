<?php


namespace App\Helpers;


class GlobalHelper
{
	public static function Op($segment = 1, $url = '')
	{
		return request()->segment($segment) == $url ? 'nav-item-expanded nav-item-open' : '';
	}

	public static function Ac($segment = 1, $url = '')
	{
		return request()->segment($segment) == $url ? 'active' : '';
	}
}
