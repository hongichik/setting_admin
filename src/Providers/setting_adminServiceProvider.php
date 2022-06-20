<?php

namespace liondev\setting_admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use liondev\setting_admin\Middleware\canInstall;
use liondev\setting_admin\Middleware\canUpdate;

class setting_adminServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
    }

    /**
     * Bootstrap the application events.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router)
    {
        $router->middlewareGroup('install', [CanInstall::class]);
        $router->middlewareGroup('update', [CanUpdate::class]);
    }

    /**
     * Publish config file for the installer.
     *
     * @return void
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/../Config/installer.php' => base_path('config/installer.php'),
        ], 'liondevsettingadmin');

        $this->publishes([
            __DIR__.'/../assets' => public_path('installer'),
        ], 'liondevsettingadmin');

        $this->publishes([
            __DIR__.'/../Views' => base_path('resources/views/vendor/installer'),
        ], 'liondevsettingadmin');


        $this->publishes([
            __DIR__.'/../admin/Views/admin' => base_path('resources/views/vendor/admin'),
        ], 'liondevsettingadmin');
        $this->publishes([
            __DIR__.'/../admin/seeders' => base_path('database/seeders'),
        ], 'liondevsettingadmin');
        $this->publishes([
            __DIR__.'/../admin/Controllers/admin' => base_path('app/Http/Controllers/vendor/admin'),
        ], 'liondevsettingadmin');
        $this->publishes([
            __DIR__.'/../admin/Routers' => base_path('routes'),
        ], 'liondevsettingadmin');
        $this->publishes([
            __DIR__.'/../admin/public/liondev_admin' => public_path('liondev_admin'),
        ], 'liondevsettingadmin');
        $this->publishes([
            __DIR__.'/../admin/public/uploads' => public_path('uploads/images'),
        ], 'liondevsettingadmin');



        $this->publishes([
            __DIR__.'/../Lang' => base_path('resources/lang'),
        ], 'liondevsettingadmin');
    }
}
