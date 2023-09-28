<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $guard_name = 'web';

    //  The attributes that are mass assignable.
    protected $fillable = [ 'name','descriptions' ];


    /*
    |-----------------
    | Relationships
    |-----------------
    */
    //  Roles has many permissions
    public function permission()
    {
        return $this->belongsToMany(Permission::class,'role_has_permissions');
    }


    /*
    |-----------
    | Functions
    |-----------
    */

    //  Get Name  and ID of Roles
    public function selectNameId()
    {
        return $this->select('name','id')->orderBy('name','asc')->get();
    }




}
