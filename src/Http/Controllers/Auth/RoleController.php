<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Auth\RoleRequest;
use App\Models\Role;
use App\Services\Auth\RoleService;
use Exception;

class RoleController extends CoreController
{
    //
    private $service;

    // path to index view
    protected $view_index = 'auth.roles.index';

    // path to edit view
    protected $view_edit = 'auth.roles.edit';

    // path to create view
    protected $view_create = 'auth.roles.create';

    // define variable to hold single object
    protected $object = 'role';

    // define variable to hold collection of object
    protected $objects = 'roles';

    // define variable to hold collection of object
    protected $route = 'roles.index';

    //  Controller constructor.
    public function __construct(Role $model, RoleService $roleService)
    {
        parent::__construct($model);
        $this->service = $roleService;
    }

    protected function index()
    {
        try {
            ${$this->objects} = $this->model->with('permission')->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    // store new resource
    protected function store(RoleRequest $request)
    {
        try {
            $this->service->store($this->model,$request);
            return $this->successRoute($this->route,'Added Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request);
        }
    }

    // update existing resource
    protected function update(RoleRequest $request,$id)
    {
        try {
            $this->service->update($this->model,$id,$request);
            return $this->successRoute($this->route,'Updated Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request);
        }
    }
}
