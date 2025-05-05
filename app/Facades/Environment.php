<?php

namespace App\Facades;

use App\Enums\Environments;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

final class Environment extends Facade
{
    use EnumFacade;

    /**
     * Returns the registered name of the component.
     *
     * @extends \Illuminate\Support\Facades\Facade::getFacadeAccessor
     * @group nonary
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Environments::class;
    }

    /**
     * @group unary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Foundation\Application::instance
     * @uses \Illuminate\Support\Facades\Facade::swap
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_string (native) Returns whether a variable is a string.
     *
     * @throws \AssertionError
     */
    public static function bind(Environments $environment): void
    {
        \assert(isset(self::$app));

        self::swap($environment);

        self::$app->instance(
            'env',
            $environment->value,
        );

        \assert(isset(self::$app['env']));
        \assert(!\is_null(self::$app['env']));
        \assert(\is_string(self::$app['env']));
    }

    /**
     * Returns or checks the current application environment.
     *
     * @extends \Illuminate\Foundation\Application::environment
     * @group variadic
     *
     * @param array|string ...$environments
     *
     * @uses \App\Strings\expectationMessage
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \Illuminate\Support\Str::is
     * @uses \is_array (native) Returns whether a variable is an array.
     *
     * @throws \AssertionError
     */
    public static function is(...$environments): bool
    {
        \assert(self::getFacadeRoot() instanceof Environments);

        $environment = self::getFacadeRoot()->value;

        if (\count($environments) > 0) {
            $patterns = \is_array($environments[0]) ? $environments[0] : $environments;

            foreach ($patterns as $pattern) {
                $pattern = match(true) {
                    $pattern instanceof Environments => $pattern->value,
                    \is_string($pattern) => $pattern,
                    default => \App\Strings\unwrap($pattern),
                };
                
                if ($pattern === $environment) {
                    return true;
                }
            }
        }

        return false;
    }
}
