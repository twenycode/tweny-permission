<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;

use App\Models\Permission;

class PermissionComponent extends Component
{
    // @var
    public $permissions;

    //  Create a new component instance.
    public function __construct(Permission $permission)
    {
        $this->permissions = $permission->nameByGroupName();
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.auth.permission-component');
    }
}
