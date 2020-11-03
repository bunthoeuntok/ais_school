<?php


namespace App\Repositories\UserManagement;

use App\Models\UserManagement\Module;
use Illuminate\Http\Request;


class ModuleRepository
{
	protected $module;

	public function __construct(Module $module) {
		$this->module = $module;
	}

	public function all()
	{
		return $this->module->all();
	}

	public function paginate($count = 50)
	{
		return $this->module->paginate($count);
	}

	public function create(Request $request)
	{

	}

	public function update(Request $request, Module $module)
	{
		$module->update();
	}
}
