<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\CoreController;
use App\Http\Requests\RoleRequest;
use App\Repository\Interfaces\RoleRepositoryInterface;

class RoleController extends CoreController
{
    /* path to index view */
    protected $view_index = 'auth.roles.index';

    /* path to edit view */
    protected $view_edit = 'auth.roles.edit';

    /* define variable to hold single object */
    protected $model = 'role';

    /* define variable to hold collection of object */
    protected $models = 'roles';

    /* define variable to hold collection of object */
    protected $route = 'roles.index';

    /*  Controller constructor. */
    public function __construct(RoleRepositoryInterface $interface)
    {
        parent::__construct($interface);
    }

    /* store new resource */
    protected function store(RoleRequest $request)
    {
        return $this->storing($request);
    }

    /* update new resource */
    protected function update(RoleRequest $request,$id)
    {
        return $this->updating($request,$id);
    }
}
