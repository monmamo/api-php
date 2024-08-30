<?php

namespace App\Exceptions;

use App\Concerns\Logging;
use App\Contracts\HasContext;
use App\Facades\App;
use App\Facades\Context;
use App\Facades\Mail;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Container\Container;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\MultipleRecordsFoundException;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Psr\Log\LogLevel;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;
use Symfony\Component\HttpFoundation\Response as Http;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Handles all exceptions This class contains a register method where you may register custom exception reporting and rendering callbacks. We'll examine each of these concepts in detail. Exception reporting is used to log exceptions or send them to an external service. By default, exceptions will be logged based on your logging configuration. However, you are free to log exceptions however you wish.
 *
 * Put Telescope and Ignition services in here.
 *
 *
 * ❗ Beware recursion. Keep simple.
 *
 * @see https://laravel.com/docs/9.x/errors#the-exception-handler
 *
 * @author Laravel
 */
final class Handler extends \Illuminate\Foundation\Exceptions\Handler
{
    /**
     *
     */
    private static $_dump_cache = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @author Laravel
     * @extends \Illuminate\Foundation\Exceptions\Handler::$dontFlash
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * The following exceptions are included in the list by Laravel:
     * - AuthenticationException::class
     * - AuthorizationException::class
     * - BackedEnumCaseNotFoundException::class
     * - HttpException::class
     * - HttpResponseException::class
     * - ModelNotFoundException::class
     * - MultipleRecordsFoundException::class
     * - RecordsNotFoundException::class
     * - SuspiciousOperationException::class
     * - TokenMismatchException::class
     * - ValidationException::class
     *
     * @see https://laravel.com/docs/9.x/errors#ignoring-exceptions-by-type
     *
     * @author Laravel
     * @extends \Illuminate\Foundation\Exceptions\Handler::$dontFlash
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        NotFoundHttpException::class,
        TokenMismatchException::class,
        InvalidEmailAddressException::class,
    ];

    /**
     *
     * @group unary
     *
     * @uses \header (native) Sends a raw HTTP header.
     * @uses \headers_sent (native) Checks if or where headers have been sent.
     * @uses \in_array (native) Returns whether a value exists in an array.
     * @uses \is_callable (native) Returns whether a variable can be called as a function.
     * @uses \is_object (native) Returns whether a variable is an object.
     * @uses \is_string (native) Returns whether a variable is a string.
     */
    private static function _exit(mixed $content): never
    {
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !\headers_sent()) {
            \header('HTTP/1.1 500 Internal Server Error');
        }

        if (\is_string($content)) {
            echo $content;
        } elseif ($content instanceof \Closure) {
            $content();
        } elseif (\is_object($content) && \is_callable($content)) {
            $content();
        }
        exit(1);
    }

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @see https://laravel.com/docs/9.x/errors#exception-log-levels
     *
     * @author Laravel
     *
     * @var array<class-string<Throwable>, string>
     */
    // protected array $levels = [  PDOException::class => LogLevel::CRITICAL ];

    /**
     * Returns the default context variables for logging.
     *
     * If available, Laravel automatically adds the current user's ID to every exception's log message as contextual data. You may define your own global contextual data by overriding the context method of your application's App\Exceptions\Handler class. This information will be included in every exception's log message written by your application:
     *
     * @see https://laravel.com/docs/9.x/errors#global-log-context
     *
     *
     * @author Laravel
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Exceptions\Handler::context
     *
     * @return array
     */
    protected function context()
    {
        return parent::context();
    }

    /**
     *
     * @group key-value-signature
     * @group trinary
     *
     * @param mixed $key Offset to get or check.
     */
    public static function cacheDump(mixed $key, mixed $value, mixed $label = null): void
    {
        self::$_dump_cache[$key] = [$value, $label];
    }

    /**
     *
     * @group nonary
     */
    public static function clearDumpCache(): void
    {
        self::$_dump_cache = [];
    }

    /**
     *
     * @group nonary
     *
     * @uses \App\Exceptions\Handler::_exit
     */
    public function dumpAndReport(mixed $exception, mixed ...$sources): never
    {
        self::_exit(
            /**
             * @group binary
             *
             * @uses \App\Dumping\dump
             * @uses \Exception::__construct
             * @uses \Illuminate\Foundation\Exceptions\Handler::report
             * @uses \is_string (native) Returns whether a variable is a string.
             */
            function () use ($exception, $sources): void {
                $this->report(match (true) {
                    $exception instanceof \Throwable => $exception,
                    \is_string($exception) => new \Exception($exception)
                });

                $dumpable = [];

                foreach ($sources as $index => $source) {
                    foreach (Context::yieldContext(name: $index, item: $source) as $key => $value) {
                        $dumpable[$key] = $value;
                    }
                }
                \App\Dumping\dump($dumpable); // 🔒
            },
        );
    }

    /**
     *
     * @group nonary
     *
     * @uses \App\Dumping\dump
     */
    public static function dumpDumpCache(): void
    {
        \App\Dumping\dump(self::$_dump_cache); // 🔒
    }

    /**
     * Registers the exception handling callbacks for the application.
     *
     * Instead of type-checking exceptions here, you may define `report` and `render` methods directly on your custom exceptions. When these methods exist, they will be automatically called by the framework.
     *
     * We currently do not use self::renderable it because all exceptions are handled by Ignition.
     *
     * @see https://laravel.com/docs/9.x/errors#renderable-exceptions
     *
     * @author Laravel
     * @group nonary
     * @group registration
     *
     * @uses \app (Laravel) Gets an item from the available container instance.
     * @uses \App\Exceptions\Handler::report Reports or logs an exception.
     * @uses \Illuminate\Foundation\Exceptions\Handler::renderable https://laravel.com/docs/9.x/errors#rendering-exceptions
     * @uses \Illuminate\Foundation\Exceptions\Handler::reportable https://laravel.com/docs/9.x/errors#reporting-exceptions
     * @uses \Illuminate\Foundation\Exceptions\ReportableHandler::stop Indicates that report handling should stop after invoking this callback.
     */
    public function register(): void
    {
        $this->reportable(
            /**
             * @group unary
             *
             * @uses \App\Exceptions\Handler::report Reports or logs an exception.
             * @uses \Exception::getPrevious
             */
            function (SilentException $exception): void {
                $this->report($exception->getPrevious());
            },
        )->stop();

        $this->reportable(
            /**
             * @group unary
             *
             * @uses \App\Contracts\HasContext::context
             * @uses \App\Dumping\dump
             */
            function (\AssertionError $exception): void {
                if ($exception instanceof HasContext) {
                    \App\Dumping\dump([...$exception->context()]); // 🔒
                }

                if ($previous = $exception->getPrevious()) {
                    $this->report($previous);
                }
            },
        );

        $this->reportable(
            /**
             * @group unary
             *
             * @uses \App\Contracts\HasContext::context
             * @uses \App\Dumping\dump
             */
            static function (\LogicException $exception): void {
                if ($exception instanceof HasContext) {
                    \App\Dumping\dump([...$exception->context()]); // 🔒
                }
            },
        );
    }

    /**
     * Reports or logs an exception.
     *
     * Behind the scenes, Laravel already ignores some types of errors for you, such as exceptions resulting from 404 HTTP "not found" errors or 419 HTTP responses generated by invalid CSRF tokens.
     *
     *
     * Don't capture an exception thrown here. \\Illuminate\Foundation\Bootstrap\HandleExceptions catches it here.
     *
     *
     * @extends \Illuminate\Foundation\Exceptions\Handler::report
     * @group unary
     *
     * @uses \array_walk
     */
    public function report(\Throwable $exception): void
    {
        $exceptions_to_report = [$exception];

        if ($this->shouldReport($exception)) {
            // Mail::sendToDeveloper(ExceptionMailable($exception));
        }

        \array_walk($exceptions_to_report, parent::report(...));
    }

    /**
     * Returns whether the exception should be reported.
     *
     *
     * @extends \Illuminate\Foundation\Exceptions\Handler::shouldReport
     * @group unary
     *
     * @uses \Illuminate\Foundation\Exceptions\Handler::shouldntReport
     *
     * @return bool
     */
    public function shouldReport(\Throwable $exception)
    {
        return !$this->shouldntReport($exception);
    }
}
