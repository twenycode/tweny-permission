<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Auth\RoleCreateRequest;
use App\Http\Requests\Auth\RoleUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Exception;

class RoleController extends BaseController
{
    // index view
    protected $index_view = 'auth.roles.index' ;

    // create view
    protected $create_view = 'auth.roles.create';

    // edit view
    protected $edit_view =  'auth.roles.edit';

    // define variable to hold single resource
    protected $resource = 'role';

    // define variable to hold collection resources
    protected $resources = 'roles';

    // Redirect route after particular action
    protected $route = 'roles.index';

    // define variable to hold model relations
    protected $model_relation = ['permission'];

    public function __construct(Role $role)
    {
        parent::__construct($role);
    }


    // Get list of resources
    public function index()
    {
        return $this->modelWithRelation();
    }

    // store new resource
    public function store(RoleCreateRequest $request)
    {
        $this->canCreate();

        try {
            $role = $this->model->create($request->validated());
            isset($request['permissions']) && $this->assignPermission($request['permissions'], $role );
            return $this->successRoute($this->route,'Role added');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request->validated(),$e->getMessage());
        }
    }

    // update existing resource
    public function update(RoleUpdateRequest $request,$id)
    {
        $this->canUpdate();
        try {
            $role =  $this->model->find($this->decode($id));
            $role->update($request->validated());
            isset($request['permissions']) ? $this->updatePermission($request['permissions'],$role) : $this->removePermission($role);
            return $this->successRoute($this->route,'Role updated');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request->all());
        }
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
