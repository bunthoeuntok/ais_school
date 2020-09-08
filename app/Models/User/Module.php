<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
	use SoftDeletes;


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class)->orderBy('order');
    }
}
