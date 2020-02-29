<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'label'];

    /**
     * Create new public function
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission')->withTimestamps();
    }

    /**
     * Create new public function
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    /**
     * Create new public function
     */
    public function givePermissionTo($permission)
    {
        $this->permissions()->save($permission);
    }
    //user->roles()
}
