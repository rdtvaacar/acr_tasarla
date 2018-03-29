<?php

namespace Acr\Acr_tasarla;

use Acr\Acr_tasarla\Controllers\TasarlaController;
use Illuminate\Support\ServiceProvider;

class Acr_tasarlaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . "/routes.php";
        $this->loadViewsFrom(__DIR__ . '/views', 'Acr_tasarlav');
        $this->publishes([
            __DIR__ . '/Public/' => base_path('/public_html/acr/tasarla'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Acr_tasarla', function () {
            return new TasarlaController();
        });
    }
}
