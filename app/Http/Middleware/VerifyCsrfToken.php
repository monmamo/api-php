<?php

namespace App\Http\Middleware;

/**
 * Middleware to verify the CSRF token.
 *
 * @author Laravel
 */
final class VerifyCsrfToken extends \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @author Laravel
     * @extends \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::$except
     *
     * @var array<int, string>
     */
    protected $except = [
        '/login',
    ];

    // /*
    //  * Creates a new "XSRF-TOKEN" cookie that contains the CSRF token.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  array  $config
    //  * @return \Symfony\Component\HttpFoundation\Cookie
    //  */
    // protected function newCookie($request, $config)
    // {
    //     return new Cookie(
    //         name:      'XSRF-TOKEN',
    //         value:    $request->session()->token(),
    //         expire:  $this->availableAt(60 * $config['lifetime']), // session.lifetime is in minutes
    //         path:   $config['path'],
    //         domain:   $config['domain'],
    //         secure:  $config['secure'],
    //         httpOnly:    false,
    //         raw:  false,
    //         sameSite:    $config['same_site'] ?? null
    //     );
    // }
}
