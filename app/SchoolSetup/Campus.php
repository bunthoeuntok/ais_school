<?php

namespace App\SchoolSetup;

use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campus extends Model
{
    use SoftDeletes;

	public function branch()
	{
		return $this->belongsTo(Branch::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class)->withTimestamps();
    }
}
