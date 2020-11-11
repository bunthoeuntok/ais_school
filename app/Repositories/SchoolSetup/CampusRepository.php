<?php

namespace App\Repositories\SchoolSetup;

use App\SchoolSetup\Campus;


class CampusRepository
{
	public function __construct()
	{
		$this->campus = new Campus;
	}

	public function all()
	{
		return $this->campus->all();
	}
}