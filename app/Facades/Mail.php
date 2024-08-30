<?php

namespace App\Facades;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Mail\SentMessage;

final class Mail extends \Illuminate\Support\Facades\Mail
{
    /**
     * @group nonary
     */
    private static function mailerReady(): bool
    {
        return ($app = \Illuminate\Support\Facades\Mail::getFacadeApplication()) !== null
            && $app->bound('mail.manager');
    }

    /**
     * Extended to add additional recipients to the emails going out from staging.
     *
     * @extends \Illuminate\Support\Facades\Mail::send
     * @group variadic
     *
     * @uses \App\Dumping\dump
     * @uses \App\Enums\Environments::isCurrent
     * @uses \Illuminate\Contracts\Mail\Mailable::cc
     * @uses \Illuminate\Support\Facades\Mail::send
     * @uses \LogicException::__construct
     *
     * @throws \LogicException
     */
    public static function send(
        Mailable|string|array $view,
        array $data = [],
        \Closure|string|null $callback = null,
    ): ?SentMessage {
        if (!self::mailerReady()) {
            throw new \LogicException('mailer is not ready');
        }

        try {
            return \Illuminate\Support\Facades\Mail::send($view, $data, $callback);
        } catch (ClientException $client_exception) {
            \App\Dumping\dump($view, $data);
            throw $client_exception;
        }
    }

    /**
     * @group variadic
     *
     * @uses \App\Facades\Mail::mailerReady
     * @uses \Illuminate\Mail\PendingMail::send
     * @uses \Illuminate\Support\Facades\Mail::to
     */
    public static function sendToDeveloper(
        Mailable|string|array $view,
        array $data = [],
        \Closure|string|null $callback = null,
    ): ?SentMessage {
        if (self::mailerReady()) {
            return \Illuminate\Support\Facades\Mail::to('developer@netshapers.net')->send($view, $data, $callback);
        }
        return null;
    }
}
