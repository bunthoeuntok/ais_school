<?php

namespace App\SchoolSetup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;

	public function campuses()
	{
		return $this->hasMany(Campus::class);
    }
}
