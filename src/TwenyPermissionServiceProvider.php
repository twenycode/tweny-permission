<?php
namespace TwenyCode\TwenyPermission;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class TwenyPermissionServiceProvider extends ServiceProvider
{

    public function register()
    {


    }


    public function boot()
    {
        $this->publishMigration();
        $this->publishViews();
        $this->publishController();
        $this->publishModel();
    }


    //  Publish Package config file
    private function publishViews(): void
    {
        $this->publishes([__DIR__.'/../resources/views/roles' => base_path('resources/views/auth/roles')],'tweny-permission');
        $this->publishes([__DIR__.'/../resources/views/permissions' => base_path('resources/views/auth/permissions')],'tweny-permission');
    }

    //  Publish Package config file
    private function publishMigration(): void
    {
        $this->publishes([__DIR__.'/../database/migrations/tweny_permissions_tables.php' => database_path('migrations/'.date('Y_m_d').'_tweny_permissions_tables.php')],'tweny-permission');
    }

    //  Publish Package Models
    private function publishModel(): void
    {
        $this->publishes([__DIR__.'/../Models/Auth' => app_path('Models/Auth')],'tweny-permission');
    }

    //  Publish Package Controllers
    private function publishController(): void
    {
        $this->publishes([__DIR__.'/Http/Controllers/Auth' => app_path('Http/Controllers/Auth')],'tweny-permission');
    }

    //  Publish Package Controllers
    private function publishRequests(): void
    {
        $this->publishes([__DIR__.'/Http/Requests/Auth' => app_path('Http/Requests/Auth')],'tweny-permission');
    }


}
