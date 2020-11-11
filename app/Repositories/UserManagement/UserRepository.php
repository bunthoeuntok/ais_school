<?php


namespace App\Repositories\UserManagement;

use App\Models\UserManagement\User;
use Illuminate\Http\Request;


class UserRepository
{
	protected $user;

	public function __construct()
	{
		$this->user = new User;
	}

	public function all()
	{
		return $this->user->all();
	}

	public function paginate($count = 50)
	{
		return $this->user->paginate($count);
	}

	public function create(Request $request)
	{

	}

	public function update(Request $request, User $user)
	{
		$user->update();
	}
}
