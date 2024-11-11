<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilesystemAdapter::macro(
            'imageToUri',
            function (string $path): string {
                \assert($this instanceof FilesystemAdapter);
                \assert($this->exists($path), "Image file not found: {$path}");
                return \sprintf(
                    'data:image/%s;base64,%s',
                    \pathinfo($path, \PATHINFO_EXTENSION),
                    \base64_encode($this->get($path)),
                );
            },
        );
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // if ($this->app->environment('local')) {
        //     $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        //     $this->app->register(TelescopeServiceProvider::class);
        // }
    }
}
