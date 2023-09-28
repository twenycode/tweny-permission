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
        $this->publishApp();
        $this->publishModel();
    }


    //  Publish Package config file
    private function publishViews(): void
    {
        $this->publishes([__DIR__.'/../resources/views' => base_path('resources/views/auth')],'tweny-permission');
        $this->publishes([__DIR__.'/../resources/components' => base_path('resources/views/components')],'tweny-permission');
        $this->publishes([__DIR__.'/../src' => base_path('app')],'tweny-permission');
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

    //  Publish Package Controllers
    private function publishApp(): void
    {
        $this->publishes([__DIR__.'/Http/Controllers/Auth' => app_path('Http/Controllers/Auth')],'tweny-permission');
        $this->publishes([__DIR__.'/Services' => app_path('Services')],'tweny-permission');
        $this->publishes([__DIR__.'/View' => app_path('View')],'tweny-permission');
        $this->publishes([__DIR__.'/Http/Requests/Auth' => app_path('Http/Requests/Auth')],'tweny-permission');
    }


}
