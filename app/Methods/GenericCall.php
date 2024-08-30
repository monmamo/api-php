<?php

namespace App\Methods;

use App\Callables\BaseCallable;
use App\Exceptions\MethodNotValidException;
use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;

/**
 * Requires use of the Macroable trait.
 *
 * usage:
 * use \App\Methods\GenericCall;
 */
trait GenericCall
{
    private array $_prefix_methods;

    private array $_suffix_methods;

    /**
     * Dynamically handle calls to the class.
     * Check for methods finishing by If or fallback to Macroable.
     *
     * @group magic
     * @group variadic
     * @group magic-call-signature
     *
     * @param string $name Method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \Illuminate\Support\Str::endsWith
     * @uses \method_exists (native) Returns whether the class method exists.
     * @uses \str_replace (native) Replaces all occurrences of the search string with the replacement string.
     * @uses \App\Exceptions\MethodNotValidException::__construct
     *
     * @throws \App\Exceptions\MethodNotValidException
     */
    public function __call($name, $arguments)
    {
        foreach ($this->suffixMethods() as $suffix => $suffix_callback) {
            if (!Str::endsWith($name, $suffix)) {
                continue;
            }

            if (!\method_exists($this, $inner_method = \str_replace($suffix, '', $name))) {
                continue;
            }

            return $suffix_callback($this->{$inner_method}(...), $arguments);
        }

        if (Str::endsWith($name, $conditions = 'FromAttributes')) {
            $newName = \str_replace('FromAttributes', '', $name);
            return fn (mixed $value, array $attributes) => ($this->{$newName})($arguments[0]($value, $attributes));
        }

        if (\method_exists($this, '__macro_call')) {
            return $this->__macro_call($name, $arguments);
        }
        throw new MethodNotValidException($this, $name);
    }

    /**
     * Dynamically handle calls to the class.
     * Check for methods finishing by If or fallback to Macroable.
     *
     * @group magic
     * @group variadic
     * @group magic-call-signature
     *
     * @param string $name Method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \App\Exceptions\MethodNotValidException::__construct
     * @uses \App\Method\GenericCall::callConditionalStaticMethod
     * @uses \Illuminate\Support\Str::endsWith
     * @uses \method_exists (native) Returns whether the class method exists.
     * @uses \str_replace (native) Replaces all occurrences of the search string with the replacement string.
     *
     * @throws \App\Exceptions\MethodNotValidException Thrown if it cannot resolve the name into a method call.
     * @throws \BadMethodCallException
     */
    public static function __callStatic($name, $arguments)
    {
        if (Str::endsWith($name, $conditions = ['If', 'Unless', 'IfNotNull'])) {
            foreach ($conditions as $condition) {
                if (!\method_exists(self::class, $method = \str_replace($condition, '', $name))) {
                    continue;
                }

                return self::callConditionalStaticMethod($condition, $method, $arguments);
            }
        }

        if (Str::endsWith($name, $conditions = 'FromAttributes')) {
            $newName = \str_replace('FromAttributes', '', $name);
            return
                /**
                 * @group accessor
                 * @group attribute-getter
                 * @group variadic
                 */
                function (mixed $value, array $attributes) use ($newName, $arguments) {
                    $inner_value = ($arguments[0])($value, $attributes);
                    return \call_user_func([self::class, $newName], $inner_value);
                };
        }

        if (\method_exists(self::class, '__macro_call')) {
            return self::__macro_call($name, $arguments);
        }
        throw new MethodNotValidException(self::class, $name);
    }

    /**
     * @group trinary
     *
     * @uses \App\Options\castBoolean
     * @uses \array_shift (native) Removes the first element from an array and returns it.
     */
    protected static function callConditionalStaticMethod(mixed $type, mixed $method, array $arguments)
    {
        $value = \array_shift($arguments);
        $callback = fn () => self::{$method}(...$arguments);
        $value_as_boolean_option = \App\Options\castBoolean($value);

        return match ($type) {
            'If' => $value_as_boolean_option->if()($callback),
            'Unless' => $value_as_boolean_option->unless()($callback),
        };
    }

    /**
     * @group nonary
     *
     * @uses \EmptyIterator::__construct
     */
    protected function generatePrefixMethods(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * @group nonary
     *
     * @uses \App\Methods\GenericCall::_if
     * @uses \App\Methods\GenericCall::_unless
     * @uses \App\Methods\GenericCall::_ifNotNull
     */
    protected function generateSuffixMethods(): \Traversable
    {
        yield 'If' => BaseCallable::runIf(...);
        yield 'Unless' => BaseCallable::runUnless(...);
        yield 'IfNotNull' => BaseCallable::runIfNotNull(...);
    }

    /**
     * @group nonary
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Methods\GenericCall::generatePrefixMethods
     */
    protected function prefixMethods(): array
    {
        return $this->_prefix_methods ??= \iterator_to_array($this->generatePrefixMethods());
    }

    /**
     * @group nonary
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Methods\GenericCall::generateSuffixMethods
     */
    protected function suffixMethods(): array
    {
        return $this->_suffix_methods ??= \iterator_to_array($this->generateSuffixMethods());
    }
}
