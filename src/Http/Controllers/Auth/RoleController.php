<?php

namespace App\Http\Controllers\Authold;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Auth\RoleRequest;
use App\Models\Auth\Role;

class RoleController extends CoreController
{
    // path to index view
    protected $view_index = 'auth.roles.index';

    // path to edit view
    protected $view_edit = 'auth.roles.edit';

    // define variable to hold single object
    protected $object = 'role';

    // define variable to hold collection of object
    protected $objects = 'roles';

    // define variable to hold collection of object
    protected $route = 'roles.index';

    //  Controller constructor.
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(RoleRequest $request)
    {
        return $this->storing($request);
    }

    // update existing resource
    protected function update(RoleRequest $request,$id)
    {
        return $this->updating($request,$id);
    }
}
