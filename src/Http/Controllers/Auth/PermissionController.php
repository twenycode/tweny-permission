<?php

namespace App\Http\Controllers\Authold;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Auth\PermissionRequest;
use App\Models\Auth\Permission;

class PermissionController extends CoreController
{
    // path to index view
    protected $view_index = 'auth.permissions.index';

    // path to edit view
    protected $view_edit = 'auth.permissions.edit';

    // define variable to hold single object
    protected $object = 'permission';

    // define variable to hold collection of object
    protected $objects = 'permissions';

    // define variable to hold collection of object
    protected $route = 'permissions.index';

    //  Controller constructor.
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(PermissionRequest $request)
    {
        return $this->storing($request);
    }

    // update existing resource
    protected function update(PermissionRequest $request,$id)
    {
        return $this->updating($request,$id);
    }
}
