<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Provider for view services.
 *
 * @author Laravel
 */
final class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstraps any application services.
     *
     * This method is called after all other service providers have been registered.
     *
     * @author Laravel
     * @implements \Illuminate\Support\ServiceProvider::boot
     * @group nonary
     */
    public function boot(): void {}
}
