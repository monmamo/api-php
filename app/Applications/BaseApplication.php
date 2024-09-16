<?php

namespace App\Applications;

use App\Exceptions\Handler;
use App\Http\Kernel;
use App\Providers\MailServiceProvider;
use Illuminate\Auth\AuthManager;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Container\Container;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

/**
 * The base class for our Laravel applications. The instance is given to the calling script so we can separate the building of the instances from the actual running of the application and sending responses. The application instance is the "glue" for all the components of Laravel, and is the IoC container for the system binding all of the various parts.
 *
 * We create Laravel applications in the following places.
 * - artisan
 * - public/index.php
 * - Automated tests.
 *
 * Put only what is absolutely necessary in here. Specifically, before putting something in here, make sure it doesn't actually go in AppServiceProvider.
 */
abstract class BaseApplication extends Application
{
    /**
     * Constructor.
     *
     * @group mutator
     * @group nonary
     *
     * @uses \Illuminate\Container\Container::singleton
     * @uses \Illuminate\Foundation\Application::__construct
     * @uses \realpath
     *
     * @return void
     */
    public function __construct()
    {
        // Point the application to the root directory.
        parent::__construct(\realpath(__DIR__ . '/../..'));

        // 💢 We have to instantiate both kernels regardless of what platform.

        $this->singleton(
            \Illuminate\Contracts\Http\Kernel::class,
            Kernel::class,
        );

        $this->singleton(
            \Illuminate\Contracts\Console\Kernel::class,
            \App\Console\Kernel::class,
        );
    }

    /**
     * Stubbed so that we can call it in child destructors.
     */
    public function __destruct() {}

    /**
     * Registers the basic bindings into the container.
     *
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Application::bind Registers a binding in the container.
     * @uses \Illuminate\Foundation\Application::instance Registers an existing instance as shared in the container.
     * @uses \Illuminate\Foundation\Application::registerBaseBindings
     * @uses \Illuminate\Foundation\Application::singleton Registers a shared binding in the container.
     * @uses \Illuminate\Support\Facades\Facade::setFacadeApplication
     */
    protected function registerBaseBindings(): void
    {
        parent::registerBaseBindings();

        // Next, we need to bind some important interfaces into the container so we will be able to resolve them when needed. The kernels serve the incoming requests to this application from both the web and CLI.

        $this->singleton(
            ExceptionHandler::class,
            Handler::class,
        );

        Config::setFacadeApplication($this);

        // Needs to be registered early so we can email error messages.
        $this->register(MailServiceProvider::class);
    }

    /**
     * @group nonary
     * @group passthrough
     *
     * @uses \Illuminate\Contracts\Http\Kernel::bootstrap
     * @uses \Illuminate\Foundation\Application::getKernel
     */
    public function bootstrapKernel(): void
    {
        $this->getKernel()->bootstrap();
    }

    /**
     * Returns the kernel that needs tbo be bootstrapped for the application.
     *
     * @implements \App\Applications\BaseApplication::getKernel
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Application::make
     */
    abstract public function getKernel(): object;

    /**
     * @group accessor
     * @group nonary
     *
     * @uses \sprintf (native) Returns a formatted string.
     * @uses \storage_path (Laravel) Returns a path to the storage directory.
     */
    public function logPath(): string
    {
        return \storage_path(\sprintf('logs/%s.log', $this->enum->name));
    }

    /**
     * @group accessor
     * @group nonary
     */
    public function name(): string
    {
        return $this->enum->name;
    }

    /**
     * @group nonary
     *
     * @uses \Illuminate\Container\Container::bind
     * @uses \Illuminate\Container\Container::rebinding
     */
    public function registerThings(): void
    {
        $this->bind(
            RequirePassword::class,
            /**
             * Shared binding.
             *
             * @group unary
             */
            function (Application $app) {
                return new RequirePassword(
                    $app[ResponseFactory::class],
                    $app[UrlGenerator::class],
                    $app['config']->get('auth.password_timeout'),
                );
            },
        );

        $this->rebinding(
            'request',
            /**
             * Handles the re-binding of the request binding.
             * Don't know why this needs to be here, but things don't work without it.
             *
             * @group binary
             */
            function (Application $app, Request $request): void {
                // $request->setUserResolver( $this['auth']->user(...));
                // return $request;
            },
        );

        $this->rebinding(
            'events',
            /**
             * Handles the re-binding of the event dispatcher binding.
             *
             * @group binary
             */
            function (Application $app, $dispatcher): void {
                if (\method_exists($guard = $this['auth']->guard(), 'setDispatcher')) {
                    $guard->setDispatcher($dispatcher);
                }
            },
        );
    }

    /**
     * @group unary
     */
    public function setAuthManager(AuthManager $authManager): void
    {
        $this->instance(
            'auth',
            $authManager,
        );
    }
}
