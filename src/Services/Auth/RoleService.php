<?php

namespace App\Services\Auth;

use App\Models\Permission;

class RoleService
{
    //  Add new role
    public function store($model,$request) : void
    {
        $role = $model->create($request->validated());
        isset($request['permissions']) && $this->assignPermission($request['permissions'], $role );
    }

    //  Add new role
    public function update($model,$id,$request) : void
    {
        $role = $model->find($id);
        $role->update($request->validated());
        isset($request['permissions']) ? $this->updatePermission($request['permissions'],$role) : $this->removePermission($role);
    }

    //  Assign Permissions to Roles
    private function assignPermission ($permissions, $role) : void
    {
        foreach ($permissions as $permission) {
            $per = Permission::find($permission);
            $role->givePermissionTo($per);
        }
    }

    //  Update Permissions to Roles
    private function updatePermission ($permissions,$role) : void
    {
       $role->permissions()->sync($permissions);
    }

    //  Remove all permissions from Role
    public function removePermission($role) : void
    {
        $role->permissions()->detach();
    }





}
