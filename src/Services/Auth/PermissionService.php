<?php

namespace App\Services\Auth;

use App\Models\Role;

class PermissionService
{
    /* Create new resource */
    public function store($model,$request) : void
    {
        $permission = $model->create($request->validated());
        isset($request['roles']) && $this->assignRoles($request['roles'], $permission); //Check if permission request has data
    }

    /* Update Specific resource */
    public function update($model,$id,$request) : void
    {
        $permission = $model->find($id);
        $permission->update($request->validated());
        isset($request['roles']) ? $this->updateRoles($permission,$request['roles']) : $this->removeRoles($permission);
    }

    /* Assign Permissions To roles */
    private function assignRoles($roles,$permission) : void
    {
        //If one or more role is selected
        foreach ($roles as $role) {
            $r = Role::find($role); //Match input role to db record
            $r->givePermissionTo($permission);
        }
    }

    /* Update Permission to Roles */
    private function updateRoles($permission, $roles) :void
    {
        $permission->roles()->sync($roles);
    }

    /* Remove all roles from permission */
    private function removeRoles($permission) : void
    {
        $permission->roles()->detach();
    }

}
