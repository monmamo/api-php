<?php

namespace App\Enums;

use App\Strings\InlineText;
use Symfony\Component\HttpFoundation\Response as Http;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Environment properties for the application.
 *
 * NOTE Composer loads environment variables from the `.env` file to both $_ENV and $_SERVER. So this enumeration exists to put all of them in one place and document them.
 *
 * @see https://www.php.net/manual/en/reserved.variables.server.php
 */
enum EnvironmentProperties: string
{
    case AmazonWebServicesAccessKeyId = 'AWS_ACCESS_KEY_ID';
    case AmazonWebServicesBucket = 'AWS_BUCKET';
    case AmazonWebServicesDefaultRegion = 'AWS_DEFAULT_REGION';
    case AmazonWebServicesPathStyleEndpoint = 'AWS_USE_PATH_STYLE_ENDPOINT';
    case AmazonWebServicesSecretAccessKey = 'AWS_SECRET_ACCESS_KEY';
    case DatabaseHost = 'DB_HOST';
    case DatabaseName = 'DB_DATABASE';
    case DatabasePassword = 'DB_PASSWORD';
    case DatabaseUsername = 'DB_USERNAME';
    case LaravelStoragePath = 'LARAVEL_STORAGE_PATH'; // Path to the storage directory.
    case RemoteAddress = 'REMOTE_ADDR';
    case RemoteName = 'REMOTE_NAME';
    case ServerAddress = 'SERVER_ADDR'; // The IP address of the server under which the current script is executing.
    case ServerName = 'SERVER_NAME'; // The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.

    /**
     * @group nonary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @throws \AssertionError
     */
    public function hasValue(): bool
    {
        \assert(isset($_SERVER));
        \assert(isset($_ENV));
        return isset($_SERVER[$this->value]) || isset($_ENV[$this->value]);
    }

    /**
     * @group nonary
     *
     * @uses \App\Enums\EnvironmentProperties::value
     * @uses \App\Enums\Hosts::from
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \preg_replace
     * @uses \strtolower
     * @uses \Symfony\Component\HttpKernel\Exception\HttpException::__construct
     * @uses \trim (native) Strips whitespace from the beginning and end of a string.
     * @uses \json_encode (native) Returns the JSON representation of a value.
     *
     * @throws \AssertionError
     */
    public static function host(): Hosts
    {
        try {
            $host = self::ServerName->value() ?? self::ServerAddress->value() ?? throw new HttpException(statusCode: Http::HTTP_BAD_REQUEST, message: 'unable to determine host: '); // .json_encode($_SERVER)
            \assert(\is_string($host));

            // trim and remove port number from host
            // host is lowercase as per RFC 952/2181
            $host = \strtolower(\preg_replace('/:\d+$/', '', new InlineText($host)));

            return Hosts::from($host);
        } catch (\ValueError $exception) {
            throw new HttpException(
                statusCode: Http::HTTP_BAD_REQUEST,
                message: "The host '{$host}' is not valid.",
            );
        }
    }

    /**
     * @group nonary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @throws \AssertionError
     */
    public function value(): ?string
    {
        \assert(isset($_SERVER));
        \assert(isset($_ENV));
        return $_SERVER[$this->value] ?? $_ENV[$this->value] ?? null;
    }
}
