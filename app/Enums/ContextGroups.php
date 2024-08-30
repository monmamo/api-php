<?php

namespace App\Enums;

use Illuminate\Support\Str;

/**
 *
 */
enum ContextGroups
{
    case Application;
    case AttributeGetter;
    case Controller;
    case DataTableColumns;
    case Exception;
    case HostGuard;
    case InvalidValue;
    case Pipeline;
    case Request;
    case Routes;
    case Value;

    /**
     * @group variadic
     *
     * @uses \Illuminate\Contracts\Foundation\Application::runningInConsole
     * @uses \app (Laravel) Gets an item from the available container instance.
     * @uses \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @uses \Illuminate\Support\Str::headline (Laravel) Converts the given string to title case for each word. ‼️ Injects a space before each uppercase character.
     * @uses \error_log (native) Sends an error message to the defined error handling routines.
     */
    public function log(array $values): void
    {
        if (\app()->runningInConsole()) {
            return;
        }

        \error_log(Str::headline($this->name));
    }
}
