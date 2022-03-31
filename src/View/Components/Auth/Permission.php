<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;

use App\Models\Permission as UserPermissions;

class Permission extends Component
{
    // @var
    public $permissions;

    //  Create a new component instance.
    public function __construct(UserPermissions $permission)
    {
        $this->permissions = $permission->getNameGroupByCategory();
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.auth.permission');
    }
}
