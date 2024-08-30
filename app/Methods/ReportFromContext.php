<?php

namespace App\Methods;

use App\Enums\ContextGroups;
use App\Facades\Handler;

/**
 * Implements the `report` method for an exception.
 */
trait ReportFromContext
{
    private bool $_use_custom_reporting = true;

    /**
     * Reports the exception.
     *
     * @see https://laravel.com/docs/10.x/errors#renderable-exceptions
     *
     * @group nonary
     *
     * @uses \App\Facades\Handler::logError
     * @uses \App\Enums\ContextGroups::log
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \App\Methods\ReportFromContext::context
     *
     * @return null|bool If your exception contains custom reporting logic that is only necessary when certain conditions are met, you may need to instruct Laravel to sometimes report the exception using the default exception handling configuration. To accomplish this, return false.
     */
    public function report()
    {
        Handler::logError(
            'context for ' . \get_class($this),
            [...$this->context()],
        );  // 🔒

        ContextGroups::Exception->log(\compact('this'));

        return $this->_use_custom_reporting;
    }
}
