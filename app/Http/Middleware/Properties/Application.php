<?php

namespace App\Http\Middleware\Properties;

use Illuminate\Contracts\Foundation\Application as ApplicationContract;

/**
 * To use: in __construct
 * - Include an  \Illuminate\Contracts\Foundation\Application  parameter.
 * - Call $this->setApplication() with the parameter.
 */
trait Application
{
    /**
     * The application instance.
     */
    private ApplicationContract $_Application;

    /**
     * Retrieves the application instance.
     *
     * @group nonary
     * @group accessor
     */
    protected function getApplication(): ApplicationContract
    {
        return $this->_Application;
    }

    /**
     * Sets the application instance.
     *
     * @group unary
     * @group mutator
     */
    protected function setApplication(ApplicationContract $Application): void
    {
        $this->_Application = $Application;
    }
}
