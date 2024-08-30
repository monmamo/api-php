<?php

namespace App\Facades;

use App\Enums\SessionVariables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response as Http;

final class Response extends \Illuminate\Support\Facades\Response
{
    /**
     * @group variadic
     *
     * @param mixed $code HTTP code to send.
     * @param null|mixed $title Title of the resulting status code.
     * @param null|mixed $message
     * @param null|mixed $errors
     * @param null|mixed $exception
     * @param null|mixed $section
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \back (Laravel) Creates a new redirect response to the previous location. Returns \Illuminate\Http\RedirectResponse.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \Illuminate\Http\RedirectResponse::withErrors
     * @uses \Illuminate\Http\RedirectResponse::withInput Flashes the current request's input data to the session before redirecting the user to a new location
     * @uses \Illuminate\Log\Logger::error
     * @uses \Illuminate\Support\Str::bagSlug (ours)
     */
    public static function back($code, $title = null, $message = null, $errors = null, $exception = null, $section = null): RedirectResponse
    {
        if (isset($exception)) {
            $errors = $exception->errors();

            \assert(\count($errors) > 0);

            Log::error('validation errors', $errors);

            // put errors into a bag specifically for this section
            return self::back(
                code: Http::HTTP_BAD_REQUEST,
                title: 'Validation Errors',
                message: 'one or more fields contains invalid data',
            )->withInput()
                ->withErrors($errors, Str::bagSlug($section));
        }

        $message ??= $title;

        $message_type = match ($code) {
            Http::HTTP_BAD_REQUEST => SessionVariables::Failure,
            Http::HTTP_ACCEPTED => SessionVariables::Success
        };

        return \back()
            ->setStatusCode($code, $title)
            ->with($message_type->value, \ucfirst($message) . '.');
    }
}
