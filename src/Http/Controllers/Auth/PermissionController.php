<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Auth\PermissionRequest;
use App\Models\Permission;
use App\Services\Auth\PermissionService;
use Exception;

class PermissionController extends CoreController
{
    //
    private $service;

    // path to index view
    protected $view_index = 'auth.permissions.index';

    // path to edit view
    protected $view_edit = 'auth.permissions.edit';

    // path to create view
    protected $view_create = 'auth.permissions.create';

    // define variable to hold single object
    protected $object = 'permission';

    // define variable to hold collection of object
    protected $objects = 'permissions';

    // define variable to hold collection of object
    protected $route = 'permissions.index';

    //  Controller constructor.
    public function __construct(Permission $model, PermissionService $permissionService)
    {
        parent::__construct($model);
        $this->service = $permissionService;
    }

    protected function index()
    {
        try {
            ${$this->objects} = $this->model->with('role')->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    // store new resource
    protected function store(PermissionRequest $request)
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
    protected function update(PermissionRequest $request,$id)
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
