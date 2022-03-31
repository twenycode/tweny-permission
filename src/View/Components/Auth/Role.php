<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;

use App\Models\Role as UserRoles;

class Role extends Component
{
    // @var
    public $roles;

    //  Create a new component instance.
    public function __construct(UserRoles $role)
    {
        $this->roles = $role->getNameId();
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.auth.role');
    }
}
