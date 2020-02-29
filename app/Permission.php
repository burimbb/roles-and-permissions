<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'label'];

    /**
     * Create new public function
     */
    public function roles()
    {
        return $this->belongsToMany('App\Roles')->withTimestamps();
    }
}
