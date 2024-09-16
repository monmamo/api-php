<?php

namespace App\Providers;

use App\Applications\HttpApplication;
use Illuminate\Support\ServiceProvider;

/**
 * https://laravel.com/docs/10.x/folio.
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @group nonary
     */
    public function boot(): void
    {
        if ($this->app instanceof HttpApplication) {
            $this->app->bootRouting();
        }
    }

    /**
     * Register services.
     *
     * @group nonary
     */
    public function register(): void {}
}
