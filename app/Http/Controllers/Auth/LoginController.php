<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'system/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function credentials(Request $request)
	{
		return [
			'email'     => $request->{$this->username()},
			'password'  => $request->password,
			'enabled'   => true
		];
	}

	public function authenticated(Request $request, $user)
	{
        $defualtCampus = DB::table('campus_user')
            ->where([
                'user_id' => $user->id,
                'year_id' => $request->year_id,
                'default' => 1
            ])->select('campus_id')->first();

        session([
            'year_id'           => $request->year_id,
            'campus_ids'        => $user->campuses()->pluck('id')->toArray(),
            'default_campus'    => $defualtCampus ? $defualtCampus->campus_id : null
        ]);
	}


	public function loggedOut(Request $request)
	{
		return redirect($this->redirectTo);
	}
}
