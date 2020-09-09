<?php


namespace App\Repositories\User;

use App\Models\User\User;
use Illuminate\Http\Request;


class UserRepository
{
	public function create(Request $request)
	{

	}

	public function update(Request $request, User $user)
	{
		$user->update();
	}
}
