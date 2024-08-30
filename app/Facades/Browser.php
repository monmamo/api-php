<?php

namespace App\Facades;

use App\Enums\Selectors;

abstract class Browser
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \is_private
     * @uses UndeclaredPrivatePropertyException::__construct
     *
     * @return mixed (usually self)
     */
    public static function __callStatic(string $method, array $arguments)
    {
        return
            /**
             * @uses \App\Dumping\dumpLabeled
             * @uses \App\Options\wrap
             * @uses \get_class (native) Returns the name of the class of an object.
             * @uses \Illuminate\Database\Eloquent\Model::getAttribute
             * @uses \Illuminate\Support\Traits\Macroable::hasMacro
             * @uses \is_array (native) Finds whether a variable is an array.
             * @uses \is_object (native) Finds whether a variable is an object.
             * @uses \LogicException::__construct
             * @uses \method_exists (native) Returns whether the class method exists.
             * @uses \sprintf (native) Returns a formatted string.
             *
             * @throws \BadMethodCallException
             * @throws \Throwable Any exception thrown from the called method.
             */
            static function (\Laravel\Dusk\Browser $browser) use ($method, $arguments): \Laravel\Dusk\Browser {
                if (\method_exists($browser, $method)) {
                    $browser->{$method}(...$arguments);
                    return $browser;
                }

                if ($browser->hasMacro($method)) {
                    $browser->{$method}(...$arguments);
                    return $browser;
                }

                \App\Dumping\dumpLabeled('method', 'arguments'); // 🔒

                throw new \BadMethodCallException(\sprintf(
                    'call to undefined method %s::%s',
                    \get_class($browser),
                    $method,
                ));

                return $browser;
            };
    }

    /**
     * @group unary
     *
     * @uses \App\Facades\Browser::__callStatic
     * @uses \tests\assertInputsInContainer
     */
    public static function assertInputsInModalPort(mixed $properties): \Closure
    {
        return self::assertInputsInContainer(Selectors::ModalPort->value . ' label', 'modal port labels', $properties);
    }
}
