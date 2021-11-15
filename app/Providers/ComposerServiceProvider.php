<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'nav-bar', 
            function ($view) {
                $val = 'bar';
                $view->with('foo', $val);
            }
        );

        // View::composer('*', function($view){
        //     //any code to set $val variable
        //     $val = 'bar';
        //     $view->with('foo', $val);
        // });
    }
}
