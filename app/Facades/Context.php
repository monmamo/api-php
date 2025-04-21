<?php

namespace App\Facades;

use App\Context\ContextRepository;
use App\Context\ContextStacks;
use App\Contracts\HasContext;
use Illuminate\Support\Facades\Facade;

/**
 * Incorporates \Illuminate\Support\Facades\Context which is in Laravel 11.
 *
 * @see https://laravel.com/docs/11.x/context
 * @see docs/inspection.md
 *
 * @method static \App\Context\ContextRepository add(string|array $key, mixed $value = null)
 * @method static \App\Context\ContextRepository addHidden(string|array $key, mixed $value = null)
 * @method static \App\Context\ContextRepository addHiddenIf(string $key, mixed $value)
 * @method static \App\Context\ContextRepository addIf(string $key, mixed $value)
 * @method static array all()
 * @method static array allHidden()
 * @method static \App\Context\ContextRepository dehydrating(callable $callback)
 * @method static \App\Context\ContextRepository flush()
 * @method static void flushMacros()
 * @method static \App\Context\ContextRepository forget(string|array $key)
 * @method static \App\Context\ContextRepository forgetHidden(string|array $key)
 * @method static mixed get(string $key, mixed $default = null)
 * @method static mixed getHidden(string $key, mixed $default = null)
 * @method static bool has(string $key)
 * @method static bool hasHidden(string $key)
 * @method static bool hasMacro(string $name)
 * @method static \App\Context\ContextRepository hydrated(callable $callback)
 * @method static bool isEmpty()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static array only(array $keys)
 * @method static array onlyHidden(array $keys)
 * @method static mixed pull(string $key, mixed $default = null)
 * @method static mixed pullHidden(string $key, mixed $default = null)
 * @method static \App\Context\ContextRepository push(string $key, mixed ...$values)
 * @method static \App\Context\ContextRepository pushHidden(string $key, mixed ...$values)
 * @method static \Illuminate\Database\Eloquent\Model restoreModel(\Illuminate\Contracts\Database\ModelIdentifier $value)
 * @method static \App\Context\ContextRepository|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \App\Context\ContextRepository|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 *
 * @see \App\Context\ContextRepository
 */
class Context extends Facade
{
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
        return ContextRepository::class;
    }

    /**
     * @group binary
     */
    public static function dumpItem(string $label, mixed $value): void
    {
        // context($label, $value);
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \App\Facades\Context::yieldContext
     */
    public static function dumpItems(mixed $content): void
    {
        foreach (self::yieldContext(item: $content) as $label => $value) {
            // context($label, $value);
        }
    }

    /**
     * usage:
     * \App\Facades\Context::pushCurrentLocation(); //TEMP
     *
     * @group unary
     */
    public static function pushCurrentLocation()
    {
        $frame = \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
        $ref = \sprintf('%s:%d', $frame['file'], $frame['line']);
        return self::push(ContextStacks::Checkpoints->name, $ref);
    }

    /**
     * @group recursive
     * @group unary
     *
     * @uses \App\Contracts\HasContext::context
     * @uses \App\Facades\Context::yieldContext
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \is_callable (native) Returns whether a variable can be called as a function.
     * @uses \is_object (native) Returns whether a variable is an object.
     * @uses \method_exists (native) Returns whether the class method exists.
     */
    public static function yieldContext(mixed $item, ?string $name = null): \Generator
    {
        if (isset($name)) {
            yield $name => $item;
            $name_base = '';
        } else {
            $name_base = $name . ':';
        }

        if (\is_array($item)) {
            foreach ($item as $key => $subvalue) {
                yield $name_base . $key => $subvalue;
            }
            return;
        }

        if ($item instanceof \Traversable) {
            foreach ($item as $key => $subvalue) {
                yield $name_base . $key => $subvalue;
            }
            return;
        }

        // if (\is_callable($item)) {foreach ($item() as $key => $subvalue) {yield from self::yieldContext(name: $key, item: $subvalue);}return;}

        if ($item instanceof HasContext) {
            foreach ($item->context() as $key => $subvalue) {
                yield $name_base . $key => $subvalue;
            }
        }

        // \is_object($content) && method_exists($content, 'context') => self::yieldContext($content->context()),

        yield 'context' => $item;
    }
}
