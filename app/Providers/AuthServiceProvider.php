<?php

namespace App\Providers;

use App\Applications\BaseApplication;
use App\AuthManager;
use App\Enums\Roles;
use Illuminate\Container\Container;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

/**
 * Our authorization service provider, which runs in place of the Laraval standard provider.
 *
 * We do not need to populate $this->policies because we will use the Laravel standard convention:
 * \App\Models\MODEL => \App\Policies\MODELPolicy.
 *
 * @see https://laravel.com/docs/9.x/authorization#policy-auto-discovery
 * @see https://laravel.com/docs/9.x/authorization
 * @see app/Policies/README.md
 *
 * @author Laravel
 */
final class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [];

    /**
     * Registers any authorization services, including gates.
     *
     * This method is called after all other service providers have been registered.
     *
     *
     * @author Laravel
     * @implements \Illuminate\Support\ServiceProvider::boot
     * @group nonary
     *
     * @uses \App\Providers\AuthServiceProvider::defineEntityGate
     * @uses \App\Providers\AuthServiceProvider::defineModelGate
     * @uses \Illuminate\Contracts\Auth\Access::define
     */
    public function boot(): void
    {

    }

    /**
     * Returns the policies defined on the provider.
     *
     *
     * @group nonary
     *
     * @return array<class-string, class-string>
     */
    public function policies()
    {
        return $this->policies;
    }

    /**
     * Registers the service provider and the the application's policies.
     *
     *
     * @group nonary
     *
     * @uses \App\Strings\expectationMessage
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Foundation\Application::bind Registers a shared binding in the container.
     * @uses \Illuminate\Foundation\Application::instance Registers an existing instance as shared in the container.
     */
    public function register(): void
    {
        \assert(
            $this->app instanceof BaseApplication,
            \App\Strings\expectationMessage(
                expectation: BaseApplication::class,
                value: $this->app,
            ),
        );

        // For some reason if I put this in \App\Applications\BaseApplication::registerThings this barfs?
        $this->app->setAuthManager(new AuthManager($this->app));

        $this->app->registerThings();
    }
}
