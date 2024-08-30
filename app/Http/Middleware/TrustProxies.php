<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

/**
 * @author Laravel
 */
final class TrustProxies extends \Illuminate\Http\Middleware\TrustProxies
{
    /**
     * The headers that should be used to detect proxies.
     *
     * @extends \Illuminate\Http\Middleware\TrustProxies::$headers
     *
     * @var int
     */
    protected $headers
        = Request::HEADER_X_FORWARDED_FOR
        | Request::HEADER_X_FORWARDED_HOST
        | Request::HEADER_X_FORWARDED_PORT
        | Request::HEADER_X_FORWARDED_PROTO
        | Request::HEADER_X_FORWARDED_AWS_ELB;

    /**
     * The trusted proxies for this application.
     *
     * @extends \Illuminate\Http\Middleware\TrustProxies::$proxies
     *
     * @var null|array<int, string>|string
     */
    protected $proxies;
}
