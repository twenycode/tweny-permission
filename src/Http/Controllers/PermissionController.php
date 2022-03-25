<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RoleRequest;
use App\Models\Role;

class RoleController extends Controller
{


    public function index()
    {
        $roles = Role::get();
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        return view(config('roles.create'));
    }

    public function store(Perm$request)
    {
        dd($request->all());
    }
}
