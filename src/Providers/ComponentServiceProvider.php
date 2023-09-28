<?php

namespace TwenyCode\TwenyPermission\Providers;

use App\View\Components\Auth\PermissionComponent;
use App\View\Components\Auth\RoleComponent;
use App\View\Components\Auth\UserComponent;
use App\View\Components\Location\CityComponent;
use App\View\Components\Location\CountryComponent;
use App\View\Components\Location\DistrictComponent;
use App\View\Components\Location\StreetComponent;
use App\View\Components\Location\WardComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    //  Register services.
    public function register()
    {
        //
    }

    //  Bootstrap services.
    public function boot()
    {
        /*
        |---------------
        | AUTHORIZATION
        |---------------
        */
        Blade::component('role', RoleComponent::class);
        Blade::component('permission', PermissionComponent::class);



    }
}
