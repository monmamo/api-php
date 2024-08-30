<?php

namespace App\Applications;

use App\Contracts\MakesGuard;
use App\Enums\EnvironmentProperties;
use App\Facades\Host;
use App\Http\Middleware as OurMiddleware;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

abstract class HttpApplication extends BaseApplication implements MakesGuard
{
    /**
     * Constructor.
     *
     * @group mutator
     * @group unary
     *
     * @uses \App\Facades\Host::bind
     * @uses \Illuminate\Foundation\Application::__construct
     * @uses \Illuminate\Support\Facades\Facade::setFacadeApplication
     *
     * @return void
     */
    public function __construct(callable $host)
    {
        parent::__construct();

        Host::setFacadeApplication($this);
        Host::bind($host);
    }

    /**
     * @group nonary
     */
    private function _apiMiddlewares(): \Traversable
    {
        // yield \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class;
        yield ThrottleRequests::class . ':api';
        yield SubstituteBindings::class;
    }

    /**
     * @group nonary
     */
    private function _webMiddlewares(): \Traversable
    {
        // Common middleware.
        yield EncryptCookies::class;
        yield AddQueuedCookiesToResponse::class;
        yield StartSession::class;
        yield OurMiddleware\SessionStarted::class;
        yield OurMiddleware\AuthenticateSession::class;
        yield ShareErrorsFromSession::class;
        yield VerifyCsrfToken::class;
        yield SubstituteBindings::class;

        // Environment-specific common middleware.
        // \App\Enums\Environments::withCurrent(function():\Traversable{});

        // Host-specific middleware. (Not currently used.)
        // foreach (\App\Facades\Host::middleware() ?? [] as $middleware) {yield $middleware; }
    }


    /**
     * Returns the kernel that needs tbo be bootstrapped for the application.
     *
     * @implements \App\Applications\BaseApplication::getKernel
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Application::make
     */
    public function getKernel(): object
    {
        return $this->make(Kernel::class);
    }

    /**
     * @group nonary
     */
    public static function run(): void
    {
        // Set this only if something is running way too long in development. set_time_limit(15); // seconds

        // If the application is in maintenance / demo mode via the "down" command we will load this file so that any pre-rendered content can be shown instead of starting the framework, which could cause an exception.

        if (\file_exists($maintenance = __DIR__ . '/../../storage/framework/maintenance.php')) {
            require $maintenance;
        }

        $app = new static(
            host: EnvironmentProperties::host(...),
        );

        // Once we have the application, we can handle the incoming request using the application's HTTP kernel.
        // Then, we will send the response back to this client's browser, allowing them to enjoy our application.

        $kernel = $app->getKernel();

        // $kernel::handle calls $kernel::bootstrap
        $response = $kernel->handle(
            $request = Request::capture(),
        )->send();

        // Terminate the application.

        $kernel->terminate($request, $response);
    }
}
