<?php


namespace App\Repositories\UserManagement;


use App\Models\UserManagement\Role;
use Illuminate\Http\Request;


class RoleRepository
{
	protected $role;

	public function __construct(Role $role)
	{
		$this->role = $role;
	}

	public function all()
	{
		return $this->role->all();
	}

	public function paginate($count = 50)
	{
		return $this->role->paginate($count);
	}

	public function create(Request $request)
	{

	}

	public function update(Request $request, Role $role)
	{
		$role->update();
	}
}
