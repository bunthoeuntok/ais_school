<?php


namespace App\Repositories\Setting;


use App\Models\Setting\Language;
use Illuminate\Http\Request;

class LanguageRepository
{
	protected $language;

	public function __construct(Language $language)
	{
		$this->language = $language;
	}

	public function all()
	{
		return $this->language->all();
	}

	public function paginate($count = 50)
	{
		return $this->language->paginate($count);
	}

	public function create(Request $request)
	{

	}

	public function update(Request $request, Language $language)
	{

	}
}
