<?php
namespace App\Providers;
use View;
use App\bike_categories;
use App\bikes;
use App\configuration;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        View::share('showcate',$showcate);
        $showbike=bikes::orderBy('id','asc')->get();
        View::share('showbike',$showbike);
             $showconf=configuration::orderBy('id','asc')->get();
        View::share('showconf',$showconf);
       
       

        Schema::defaultStringLength(191);
    }
}
