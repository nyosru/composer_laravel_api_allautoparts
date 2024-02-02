<?php

namespace Phpcatcom\Api;

//use Illuminate\Support\Facades\Blade;
use PhpCatCom\Middleware\AuthRoles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class AllautopartsServiceProvider extends ServiceProvider
{
    public function boot(
//        Router $router
    )
    {
////        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
////
////        if ($this->app->runningInConsole()) {
////            $this->commands([
////                Commands\PermissionsGenerate::class,
////                Commands\PermissionsClear::class,
////            ]);
////        }
////
////        $router->aliasMiddleware('auth.role', AuthRoles::class);
//
//        $this->loadViewsFrom(__DIR__ . '/views', 'phpcatcom/permission/gui');
//        require_once(__DIR__ . '/Routes/web.php');
//        require_once(__DIR__ . '/Routes/api.php');
//        require_once(__DIR__ . '/Routes/api.php');
//
////        Blade::directive('role_in_permission', function ($ar,$role_id) {
////            return rand(1,2) == 1 ;
////        });

    }

    public function register()
    {
    }

}
