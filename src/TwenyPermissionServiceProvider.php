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
        $this->bootRoutes();
        $this->bootViews();
        $this->publishConfig();
        $this->publishMigration();
        $this->publishModel();
    }

    //  Boot package routes
    private function bootRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    //  Boot package views
    private function bootViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views','tweny-permission-views');
    }

     //  Publish Package config file
    private function publishConfig(): void
    {
        $this->publishes([__DIR__.'/../config/tweny-permission.php' => config_path('tweny-permission.php')],'tweny-permission');
    }

    //  Publish Package config file
    private function publishMigration(): void
    {
        $this->publishes([__DIR__.'/../database/migrations/tweny_permissions_tables.php' => database_path('migrations/'.date('Y_m_d').'_tweny_permissions_tables.php')],'tweny-permission');
    }

    //  Publish Package Models
    private function publishModel(): void
    {
        $this->publishes([__DIR__.'/../Models' => app_path('Models')],'tweny-permission');
    }


}
