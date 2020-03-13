<?php
namespace App\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\State;

class StatsServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app->singleton( State::class, function () {
            return new State();
        });

        view::share('stats', app('App\Helpers\State'));

    }


}
