<?php

namespace Alihossein\Time;



use Alihossein\Time\Facade\Timer;
use Alihossein\Time\Middlewares\CheckTime;
use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // route
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    
        
        // view 
        $this->loadViewsFrom(__DIR__.'/Views', 'MyView');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/MyView'),
            
        ],'MyTag');
        //
//        migration
//        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->publishes([
            __DIR__.'/Migrations' => database_path('migrations'),

        ],'MyTag');

        // middleware
        $router=$this->app['router'];
        $router->middleware('checkTime',CheckTime::class);
        
        // binding
        $this->app->bind('MyTimer',function(){
            return new Timer();
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', 'MyConfig'
        );
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('MyConfig.php'),
        ]);
    }
}
