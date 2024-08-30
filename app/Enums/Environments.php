<?php

namespace App\Enums;

use App\Contracts\HasBooleanCast;
use App\Facades\App;
use App\Facades\Environment;
use App\Facades\Handler;
use App\Facades\User;
use App\Methods\Make\MakeForEnum;
use App\Strings\EmailAddress;
use App\Strings\TypeIndicator;
use Psr\Log\LoggerInterface;

/**
 * Enumeration of our environments.
 *
 * ‼️ Laravel is built on an assumption that the development environment is named "local." Watch out for features that assume this.
 *
 * Callables for the reporting methods yield the context items and return the message.
 *
 * IMPORTANT Always test the environment explicitly in the affirmative.
 *
 * Do not use \Illuminate\Support\Facades\App::environment.
 *
 * @see docs/inspection.md
 */
enum Environments: string implements HasBooleanCast, LoggerInterface
{
    use MakeForEnum;

    case Development = 'development';
    case Invalid = '';
    case Production = 'production';
    case Staging = 'staging';
    case Testing = 'testing';

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @implements \Psr\Log\LoggerInterface::alert
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Facades\Handler::logWarning
     * @uses \App\Enums\Environments::isCurrent
     */
    public function alert(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logWarning($message, $context);
        }
    }

    /**
     * @implements \App\Contracts\HasBooleanCast::asBoolean
     * @group nonary
     * @group accessor
     * @group reductive
     *
     * @uses \App\Enums\Environments::isCurrent
     */
    public function asBoolean(): bool
    {
        return $this->isCurrent();
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @implements \Psr\Log\LoggerInterface::critical
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Facades\Handler::logCatastrophe
     * @uses \App\Enums\Environments::isCurrent
     */
    public function critical(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logCatastrophe($message, $context);
        }
    }

    /**
     * Detailed debug information.
     *
     * 💡 Don't create permanent uses of this code. Use a more appropriate label.
     *
     * @implements \Psr\Log\LoggerInterface::debug
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Facades\Handler::logDebug
     * @uses \App\Enums\Environments::isCurrent
     */
    public function debug(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logDebug($message, $context);
        }
    }

    /**
     * @group variadic
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Dumping\dump
     */
    public function dump(mixed ...$moreVars): void
    {
        if ($this->isCurrent()) {
            \App\Dumping\dump(...$moreVars); // 🔒
        }
    }

    /**
     * Transforms an email address for the current environment.
     * Ensures that we don't accidentally send e-mails to real people from the development or staging environments.
     * For now, we are just changing the domain to netshapers.net.
     * Those mails currently go to the account that netshapers.net redirects emails to.
     *
     * @group unary
     *
     * @uses \App\Strings\EmailAddress::check
     * @uses \App\Strings\EmailAddress::user
     * @uses \App\Strings\EmailAddress::domain
     * @uses \App\Strings\EmailAddress::__construct
     */
    public function emailAddress(string $address): string
    {
        $parts = new EmailAddress($address);
        $parts->check();

        return match ($this) {
            Environments::Production => $address,
            Environments::Staging => User::instance()->email_address,
            Environments::Development => $parts->user() . '.' . $parts->domain() . '@' . EmailAddress::DEVELOPMENT_DESTINATION_DOMAIN,
            Environments::Testing => $parts->user() . '.' . $parts->domain() . '@' . EmailAddress::DEVELOPMENT_DESTINATION_DOMAIN,
        };
    }

    /**
     * System is unusable.
     *
     * These messages should go to the filesystem logs.
     *
     * @implements \Psr\Log\LoggerInterface::emergency
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Facades\Handler::logEmergency
     * @uses \App\Enums\Environments::isCurrent
     */
    public function emergency(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logEmergency($message, $context);
        }
    }

    /**
     * Runtime errors that do not require immediate action but should typically be logged and monitored.
     *
     * @implements \Psr\Log\LoggerInterface::error
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Facades\Handler::logError
     * @uses \App\Enums\Environments::isCurrent
     */
    public function error(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logError($message, $context);
        }
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @implements \Psr\Log\LoggerInterface::emergency
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Facades\Handler::logInfo
     */
    public function info(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logInfo($message, $context);
        }
    }

    /**
     * Returns whether the current environment is the same as this one.
     *
     * Avoid testing for the negative. Instead, perform a separate action for each value.
     *
     * @group nonary
     * @group accessor
     *
     * @uses \App\Facades\Environment::getFacadeRoot
     */
    public function isCurrent(): bool
    {
        return Environment::getFacadeRoot() === $this;
    }

    /**
     * Logs with an arbitrary level.
     *
     * @implements \Psr\Log\LoggerInterface::log
     * @group variadic
     * @group passthrough
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \app (Laravel) Gets an item from the available container instance.
     * @uses \Psr\Log\LoggerInterface::log
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log(mixed $level, string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            \app(LoggerInterface::class)->log($message, $context);
        }
    }

    /**
     * Logs normal but significant events.
     *
     * @implements \Psr\Log\LoggerInterface::notice
     * @group variadic
     * @group passthrough
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Facades\Handler::logNotice
     */
    public function notice(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logNotice($message, $context);
        }
    }

    /**
     * Writes a message to the raw error log (storage/logs/laravel.log).
     *
     * @group nonary
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \error_log (native) Sends an error message to the defined error handling routines.
     */
    public function rawlog(string|\Stringable $message): void
    {
        if ($this->isCurrent()) {
            \error_log($message);
        }
    }

    /**
     * Replacement for \rescue.
     *
     * usage:
     * try { CALLABLE } catch (\Throwable $throwable) { return \App\Facades\Environment::rescue(throwable: $throwable); }.
     *
     * @group unary
     *
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Dumping\dump
     * @uses \App\Strings\TypeIndicator::__construct
     * @uses \RuntimeException::__construct
     * @uses \App\Facades\Handler::report
     */
    public function rescue(
        ?\Throwable $throwable = null,
        ?string $expectation = null,
        mixed $value = null,
        ?\Throwable $previous = null,
        mixed $context = null,
    ): mixed {
        $throwable ??= match (true) {
            !\is_null($expectation) => new TypeIndicator(expectation: $expectation, value: $value),
            !\is_null($value) => new TypeIndicator($value),
            default => new \RuntimeException('Rescue without throwable or value provided.'),
        };

        if (!\is_null($previous)) {
            Handler::report($previous);
        }

        Handler::report($throwable);

        match (true) {
            \is_array($context) => \App\Dumping\dumpLabeled($context),
            \is_null($context) => null,
            default => \App\Dumping\dump($context)
        };

        return match ($this) {
            Environments::Staging => Stringable::WARNING_EMOJI,
            Environments::Production => '',
            Environments::Development,
            Environments::Testing => throw $throwable,
        };
    }

    /**
     * TODO Make this an attribute.
     *
     * @group nonary
     */
    public function showVirtualTime(): bool
    {
        return match ($this) {
            Environments::Development, Environments::Staging => true,
            Environments::Production, Environments::Testing => false,
        };
    }

    /**
     * TODO Refactor this so that $throwable is a callable.
     *
     * @group binary
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Dumping\dumpLabeled
     */
    public function throw(\Throwable $throwable, array $context = []): void
    {
        if ($this->isCurrent()) {
            \App\Dumping\dumpLabeled($context); // 🔒
            throw $throwable;
        }
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
     *
     * @implements \Psr\Log\LoggerInterface::warning
     * @group variadic
     *
     * @param string|\Stringable $message Message to record.
     * @param mixed[] $context Contextual data to record along with the message and severity level.
     *
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Facades\Handler::logWarning
     */
    public function warning(string|\Stringable $message, array $context = []): void
    {
        if ($this->isCurrent()) {
            Handler::logWarning($message, $context);
        }
    }

    /**
     * @group variadic
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \Illuminate\Contracts\Foundation\Application::environment via facade
     * @uses \App\Facades\Environment::value
     *
     * @throws \LogicException if app('env') not set
     */
    public static function withCurrent(\Traversable $callables, ...$arguments): bool
    {
        $callables_array = \iterator_to_array($callables);
        return $callables_array[Environment::value()](...$arguments);
    }
}
