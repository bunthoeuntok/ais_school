<?php


namespace App\Repositories\UserManagement;


use App\Models\UserManagement\Page;
use Illuminate\Http\Request;

class PageRepository
{
	protected $page;

	public function __construct(Page $page)
	{
		$this->page = $page;
	}

	public function all()
	{
		return $this->page->all();
	}

	public function paginate($count = 50)
	{
		return $this->page->paginate($count);
	}

	public function create(Request $request)
	{
		$this->page->create([
			'name' => $request->name,
			'slug' => $request->name
		]);
	}

	public function update(Request $request, Page $page)
	{
		$page->update();
	}

}
