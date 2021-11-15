<?php

namespace App\Providers;
use View;
use DB;
use App\transparency;
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
        $Transparency_Year = DB::table('transparency')
        ->get()
        ->groupBy('trans_year');
        View::share(compact('Transparency_Year'));
    }
}
