<?php

use App\Applications\RootApplication;

\define('LARAVEL_START', \microtime(true));
require __DIR__ . '/../vendor/autoload.php';


use App\Authentication\PublicGuard;
use Illuminate\Contracts\Auth\Guard;

new class extends \App\Applications\HttpApplication
{
    /**
     *
     * @group nonary
     */
    public function makeGuardObject(): Guard
    {
        return new PublicGuard();
    }

    /**
     *
     * @group nonary
     */
    public function bootRouting(): void
    {
        
        $folio_manager = app(\Laravel\Folio\FolioManager::class);

        $folio_manager->registerRoute(
            path: resource_path('views/pages'),
            uri:'/',
            middleware:[],
            domain: null
        );
    }
};