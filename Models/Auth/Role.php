<?php

namespace App\Models\Auth;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{

    //  The attributes that are mass assignable.
    protected $fillable = [ 'name','descriptions' ];

    //  Roles has many permissions
    public function permission()
    {
        return $this->belongsToMany(Permission::class,'role_has_permissions');
    }

    //  Get Name  and ID of Roles
    public function getNameId ()
    {
        return $this->select('name','id')->orderBy('name','asc')->get();
    }



}
