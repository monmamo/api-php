<?php
\define('LARAVEL_START', \microtime(true));
require __DIR__ . '/../vendor/autoload.php';

use App\Applications\HttpApplication;
use App\Authentication\PublicGuard;
use Illuminate\Contracts\Auth\Guard;
use Laravel\Folio\FolioManager;

new class() extends HttpApplication
{
    /**
     * @group nonary
     */
    public function bootRouting(): void
    {
        $folio_manager = \app(FolioManager::class);

        $folio_manager->registerRoute(
            path: \resource_path('views/pages/cards'),
            uri: '/',
            middleware: [],
            domain: null,
        );
    }

    /**
     * @group nonary
     */
    public function makeGuardObject(): Guard
    {
        return new PublicGuard();
    }
};
