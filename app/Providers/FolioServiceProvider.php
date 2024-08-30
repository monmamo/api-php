<?php

namespace App\Providers;

use App\Applications\ArtisanApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

/**
 * https://laravel.com/docs/10.x/folio
 */
class FolioServiceProvider extends ServiceProvider
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
if ($this->app instanceof ArtisanApplication) return;

$path = resource_path('views/pages/'.\class_basename($this->app));

        Folio::path($path );
        // ->middleware([
        //     '*' => [
        //         //
        //     ],
        // ]);
    }
}
