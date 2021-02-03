<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = basename(dirname(__DIR__, 1));
        //Routes
        config([
            $moduleName => File::getRequire(loadConfigFile('route' , $moduleName)),
        ]);
       $this->loadRoutesFrom(loadRoute('web', $moduleName));

    //    $this->loadRoutesFrom(__DIR__.$ds.'..'.$ds.'routes'.$ds.'backend.php');
    //    $this->loadRoutesFrom(__DIR__.$ds.'..'.$ds.'routes'.$ds.'api.php');

       //Views
       $this->loadViewsFrom(loadViews($moduleName), $moduleName);

       //migration
       $this->loadMigrationsFrom(loadMigrate($moduleName));

       //Language
       $this->loadTranslationsFrom(loadLang($moduleName) , $moduleName);

    //    dd(config());
    }
}
