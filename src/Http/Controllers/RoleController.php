<?php

namespace TwenyCode\TwenyPermission\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view(config('tweny-permission.views.role.index'),compact('roles'));
    }

}
