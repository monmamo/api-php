<?php

namespace App\Facades;

use App\Exceptions\RecursionException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Console\View\Components\Error;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as Http;

final class Handler extends Facade
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
        return \App\Exceptions\Handler::class;
    }

    /**
     * @group variadic
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
     *
     * @throws \AssertionError
     */
    public static function assert(
        mixed $predicate,
        array $predicate_arguments = [],
        mixed $context_to_dump = null,
        mixed $dumper = null,
        mixed $enabled = true,
        mixed $assertion_message = null,
    ): void {
        // if (!self::_enabled($enabled)) {return;        }

        \assert(
            \value(
                /**
                 * @group variadic
                 *
                 * @uses \App\Callables\makeClosure
                 * @uses \App\Contracts\HasValue::get
                 * @uses \App\Dumping\dump
                 * @uses \App\Options\castBoolean
                 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
                 *
                 * @throws \App\Strings\TypeIndicator
                 */
                function () use ($predicate, $predicate_arguments, $dumper, $context_to_dump): bool {
                    try {
                        if (\App\Options\castBoolean($predicate, $predicate_arguments)->get()) {
                            return true;
                        }

                        $dumper ??=
                        /**
                         * @uses \App\Facades\Context::yieldContext
                         */
                        function ($predicate, $predicate_arguments) use ($context_to_dump): void {
                            $dump_content = \iterator_to_array(Context::yieldContext(item: $context_to_dump));
                            $dump_content['run:function'] = $predicate;
                            $dump_content['run:arguments'] = $predicate_arguments;
                            \App\Dumping\dump($dump_content); // 🔒
                        };

                        \App\Callables\makeClosure($dumper)($predicate, $predicate_arguments);

                        return false;
                    } catch (\Throwable $exception) {
                        self::_exit('EXCEPTION IN Handler::assert: ' . \get_class($exception));
                    }
                },
            ),
            \value($assertion_message ?? 'assertion failed; see dump for details'),
        );
    }

    /**
     * @group sugar Exists mainly to reduce the need for awkward value(function()...) structures.
     * @group variadic
     *
     * @deprecated Use \App\Dumping\dumpAndExit instead.
     */
    public static function dumpAndExit(...$sources): never
    {
        \App\Dumping\dumpAndExit(...$sources);
    }

    /**
     * @group sugar Exists mainly to reduce the need for awkward value(function()...) structures.
     * @group variadic
     *
     * @uses \App\Dumping\dump
     * @uses \App\Dumping\reflect
     * @uses \array_map (native) Applies the callback to the elements of the given arrays.
     */
    public static function dumpAndThrow(\Throwable $exception, ...$sources): never
    {
        \App\Dumping\dump(...\array_map(\App\Dumping\reflect(...), $sources)); // 🔒
        throw $exception;
    }

    /**
     * @group unary
     *
     * @uses \header (native) Sends a raw HTTP header.
     * @uses \headers_sent (native) Checks if or where headers have been sent.
     * @uses \in_array (native) Returns whether a value exists in an array.
     */
    public static function exit(): never
    {
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !\headers_sent()) {
            \header('HTTP/1.1 500 Internal Server Error');
        }
        exit(1);
    }

    /**
     * Log a sitation that represents an error in logic and must be fixed.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Support\Facades\Gate::allows
     */
    public static function glowError(mixed $label, array $content = []): void
    {
        static $iteration_count = 0;

        if (++$iteration_count > 1) {
            throw new RecursionException($iteration_count);
        }

        --$iteration_count;
    }

    /**
     * Log information that is useful in examining program execution.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     */
    public static function glowInfo(mixed $label, array $content = []): void
    {
        static $iteration_count = 0;

        if (++$iteration_count > 1) {
            throw new RecursionException($iteration_count);
        }

        // glow($label, MessageLevels::INFO, $content);

        --$iteration_count;
    }

    /**
     * @group variadic
     *
     * @uses \Illuminate\Support\Facades\Gate::allows
     */
    public static function glowWarning(mixed $label, array $content = []): void
    {
        static $iteration_count = 0;

        if (++$iteration_count > 1) {
            throw new RecursionException($iteration_count);
        }

        --$iteration_count;
    }

    /**
     * HTTP_UNAUTHORIZED: The user is not logged in, or is logged in but does not have the necessary permissions to access the resource.
     *
     * @group binary
     *
     * @param \Illuminate\Http\Request $request (injected) The request we are handling.
     * @param \Illuminate\Auth\AuthenticationException $exception The exception to handle.
     *
     * @uses \Exception::getMessage
     * @uses \Illuminate\Contracts\Routing\ResponseFactory::json
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function jsonForUnauthenticated(Request $request, AuthenticationException $exception)
    {
        return new JsonResponse(
            data: ['message' => $exception->getMessage()],
            status: Http::HTTP_UNAUTHORIZED,
        );
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::critical
     */
    public static function logCatastrophe(mixed $label, array $content = []): void
    {
        Log::critical($label, $content);
    }

    /**
     * Log information to debug a situation.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::debug
     */
    public static function logDebug(mixed $label, array $content = []): void
    {
        Log::debug($label, $content);
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::emergency
     */
    public static function logEmergency(mixed $label, array $content = []): void
    {
        Log::emergency($label, $content);
    }

    /**
     * Log a sitation that represents an error in logic and must be fixed.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::error
     */
    public static function logError(mixed $label, array $content = []): void
    {
        Log::error($label, $content);
    }

    /**
     * Log information that is useful in examining program execution.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::info
     */
    public static function logInfo(mixed $label, array $content = []): void
    {
        Log::info($label, $content);
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Log\Logger::notice
     */
    public static function logNotice(mixed $label, array $content = []): void
    {
        Log::notice($label, $content);
    }

    /**
     * Log a sitation that represents a problem in logic that can probably stand for now but should not be ignored.
     *
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \Illuminate\Support\Facades\Gate::allows
     */
    public static function logWarning(mixed $label, array $content = []): void
    {
        // glow($label, MessageLevels::WARNING, $content);
    }

    /**
     * @group functional
     * @group unary
     *
     * @uses \App\Callables\normalizeTransform
     * @uses \array_reduce (native) Iteratively reduces the array to a single value using a callback function.
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \debug_backtrace
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @throws \AssertionError
     */
    public static function neverCallRecursively(mixed $callback)
    {
        static $cache = [];
        $frame = \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
        $ref = \sprintf('%s:%d', $frame['file'], $frame['line']);
        \assert(!isset($cache[$ref]), "recursive call detected at {$ref}");
        $cache[$ref] = true;

        $transforms = \iterator_to_array(\App\Callables\normalizeTransform($callback));

        $result = \array_reduce(
            $transforms,
            fn ($carry, callable $transform) => $transform($carry),
            null,
        );

        unset($cache[$ref]);

        return $result;
    }

    /**
     * https://tighten.com/insights/a-better-dd-for-your-tdd/.
     *
     * @group unary
     *
     * @deprecated
     *
     * @uses \ReflectionAttribute::getArguments
     * @uses \ReflectionObject::__construct
     * @uses \ReflectionObject::getAttributes
     */
    public static function reflect(mixed $source): array
    {
        return \App\Dumping\reflect($source);
    }

    /**
     * Given a closure and a filename, calls the closure with the filename as the first argument.
     *
     * @group binary
     *
     * @param string $filename
     *
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \LogicException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @throws \LogicException
     */
    public static function tryActionOnFilename(\Closure $action, $filename): void
    {
        try {
            $action($filename);
        } catch (\UnhandledMatchError $exception) {
            throw new \LogicException("file {$filename}: unhandled action type", 0, $exception);
        } catch (\Throwable $exception) {
            throw new \LogicException(\sprintf('exception of type %s in file %s', \get_class($exception), $filename), 0, $exception);
        }
    }
}
