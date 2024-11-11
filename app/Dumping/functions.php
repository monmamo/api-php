<?php

namespace App\Dumping;

use App\Contracts\Dumps;
use App\Enums\Environments;
use App\Facades\Environment;
use App\Facades\Handler;
use App\GeneralAttributes\Gloss;
use Symfony\Component\VarDumper\VarDumper;

/**
 * usage:
 * \App\Dumping\dumpIfException(CONTEXT,fn() => CALCULATION);
 * or
 * \App\Dumping\dumpIfException(CONTEXT,function()use(CONTEXT){CALCULATION});
 *
 * Compare \rescue.
 *
 * @group binary
 * @group sugar
 *
 * @uses \App\Dumping\reflect
 * @uses \App\Dumping\dump Dumps any number of variables to the dump handler.
 */
function dumpIfException(
    mixed $context,
    callable $callable,
) {
    try {
        return $callable();
    } catch (\Throwable $exception) {
        \App\Dumping\dump(\App\Dumping\reflect($context)); // 🔒
        throw $exception;
    }
}

/**
 * @group binary
 * @group sugar
 */
function rescueIfException(
    mixed $context,
    callable $callable,
) {
    try {
        return $callable();
    } catch (\Throwable $exception) {
        return Environment::rescue(throwable: $exception, context: $context);
    }
}

/**
 * Use this instead of \dd. This gives us control over dumping by environment and situation.
 *
 * Still use \dd for pinch debugging, but use this for permanent debugging.
 *
 * @group sugar Exists mainly to reduce the need for awkward value(function()...) structures.
 * @group variadic
 *
 * @uses \array_map (native) Applies the callback to the elements of the given arrays.
 * @uses \App\Dumping\reflect
 * @uses \App\Dumping\dump
 */
function dumpAndExit(...$sources): never
{
    \App\Dumping\dump(...\array_map(\App\Dumping\reflect(...), $sources)); // 🔒
    Handler::exit();
}

/**
 * @group sugar Exists mainly to reduce the need for awkward value(function()...) structures.
 * @group variadic
 *
 * @uses \array_map (native) Applies the callback to the elements of the given arrays.
 * @uses \App\Dumping\reflect
 * @uses \App\Dumping\dump
 */
function dumpAndThrow(\Throwable $exception, ...$sources): never
{
    \App\Dumping\dump(...\array_map(\App\Dumping\reflect(...), $sources)); // 🔒
    throw $exception;
}

/**
 * https://tighten.com/insights/a-better-dd-for-your-tdd/.
 *
 * @group unary
 *
 * @uses \array_map (native) Applies the callback to the elements of the given arrays.
 * @uses \array_push (native) Pushes one or more elements onto the end of array.
 * @uses \is_object (native) Returns whether a variable is an object.
 * @uses \ReflectionAttribute::getArguments
 * @uses \ReflectionObject::__construct
 * @uses \ReflectionObject::getAttributes
 */
function reflect(mixed $source): array
{
    // if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) && !headers_sent()) { header('HTTP/1.1 500 Internal Server Error'); }

    $content = [];

    if (\is_object($source)) {
        $reflection = new \ReflectionObject($source);
        \array_push(
            $content,
            ...\array_map(
                fn ($attribute) => $attribute->getArguments()[0],
                $reflection->getAttributes(Gloss::class),
            ),
        );
    }

    $content[] = $source;
    return $content;
}

/**
 * @group nonary
 *
 * @uses \App\Enums\Environments::isCurrent
 */
function inDumpingContext(): bool
{
    return Environments::Development->isCurrent();
    // && DebuggingMode::MostTerse->asBoolean())) {
}

/**
 * @group binary
 *
 * @uses \App\Dumping\dump
 * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
 * @uses \UnhandledMatchError::__construct
 *
 * @throws \UnhandledMatchError
 */
function dumpUnhandledValue($value, string $label = 'unhandled value'): void
{
    \App\Dumping\dump($value); // 🔒
    throw new \UnhandledMatchError(\sprintf('%s of type %s', $label, \get_debug_type($value)));
}

/**
 * @group binary
 * @group sugar
 *
 * @uses \Symfony\Component\VarDumper\VarDumper::dump
 * @uses \App\Dumping\inDumpingContext
 */
function dumpWithLabel(mixed $value, string $label): mixed
{
    if (\App\Dumping\inDumpingContext()) {
        VarDumper::dump($value, $label);
    }
    return $value;
}

/**
 * @group variadic
 * @group sugar
 *
 * @uses \App\Options\wrap
 * @uses \Symfony\Component\VarDumper\VarDumper::dump
 * @uses \App\Dumping\inDumpingContext
 * @uses \App\Dumping\dumpLabeled
 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
 *
 * @return array Variables passed to dump.
 */
function dumpLabeled(mixed $variables): array
{
    $variables_in_array = \iterator_to_array(\App\Options\iterate($variables));

    if (\App\Dumping\inDumpingContext()) {
        VarDumper::dump($variables_in_array);
    }
    return $variables_in_array;
}
/**
 * Use this instead of \dump. This gives us control over dumping by environment and situation.
 *
 * Still use \dump for pinch debugging, but use this for permanent debugging.
 *
 * Can handle lazy arguments. Ensures that dump takes place only in development.
 *
 * @group variadic
 *
 * @uses \Symfony\Component\VarDumper\VarDumper::dump
 *
 * @return array Variables passed to dump.
 */
function dump(mixed ...$vars): array
{
    if (\App\Dumping\inDumpingContext()) {
        foreach ($vars as $k => $v) {

            if ($v instanceof \Closure) {
                $v = $v();
            }

            if ($v instanceof Dumps) {
                $v->dump();
            } else {
                VarDumper::dump($v, \is_int($k) ? 1 + $k : $k);
            }
        }
    }
    return $vars;
}
