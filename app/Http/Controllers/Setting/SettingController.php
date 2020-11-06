<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function locale($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }

    public function year($yearId)
    {
    	session(['year_id' => $yearId]);
    	return redirect()->back();
    }

}
