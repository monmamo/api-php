<?php

namespace App\Http;

use App\Http\Middleware as OurMiddleware;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Routing\Middleware\ThrottleRequests;

/**
 * I persomally do not like using aliases because Telescope doesn't resolve the aliases to the actual classes.
 *
 *
 * @author Laravel
 */
final class Kernel extends \Illuminate\Foundation\Http\Kernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @extends \Illuminate\Foundation\Http\Kernel::$middleware
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        OurMiddleware\TrustHosts::class,
        OurMiddleware\TrustProxies::class,
        HandleCors::class,
        PreventRequestsDuringMaintenance::class,
        ValidatePostSize::class,
        OurMiddleware\MassageInput::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * The order is significant.
     *
     * @extends \Illuminate\Foundation\Http\Kernel::$middlewareGroups
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [],
        'api' => []
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @extends \Illuminate\Foundation\Http\Kernel::$routeMiddleware
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'throttle' => ThrottleRequests::class,
    ];
}
