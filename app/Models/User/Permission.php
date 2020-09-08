<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	protected $fillable = ['name', 'slug', 'active'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
