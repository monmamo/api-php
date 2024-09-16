<?php

namespace App\Exceptions;

use App\Facades\URL;
use App\View\LoginForm;

final class AuthenticationException extends \Illuminate\Auth\AuthenticationException
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     *
     * @param string $message
     * @param null|string $redirectTo
     *
     * @uses \App\Facades\URL::route Returns the URL to a named route. Dumps and throws.
     * @uses \Illuminate\Auth\AuthenticationException::__construct
     *
     * @return void
     */
    public function __construct($message = 'Unauthenticated.', array $guards = [], $redirectTo = null)
    {
        parent::__construct(
            $message,
            $guards,
            $redirectTo ?? URL::route(LoginForm::class),
        );
    }
}
