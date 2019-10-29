<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Blade::directive('sayhi', function(){
            return '<?= "<h2>say hi~~</h2>"; ?>';
        });


        //
        view()->share('globalProjectName', 'ws1910290940');
        view()->composer('Home.test',function($view){
            $view->with('globalTest', 'from composer');
        });
    }
}
