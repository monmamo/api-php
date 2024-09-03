<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;


/**
 * https://laravel.com/docs/10.x/folio
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @group nonary
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     * @group nonary
     */
    public function boot(): void
    {
if ($this->app instanceof \App\Applications\HttpApplication) 
$this->app->bootRouting();
    }
}
