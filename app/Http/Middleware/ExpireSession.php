<?php

namespace App\Http\Middleware;

use App\Enums\SessionVariables;
use App\Http\NormalizeResponse;
use Illuminate\Http\Request;

final class ExpireSession
{
    use NormalizeResponse;

    /**
     * Massages the request per the needs of the middleware.
     *
     * @implements \App\Http\NormalizeResponse::massageRequest
     * @group unary
     *
     * @param \Illuminate\Http\Request $request (injected) The request we are handling.
     */
    protected function massageRequest(Request $request)
    {
        // $session = $request->session();

        // try {
        // $maximum_idle_time_seconds = config('session.maximum_idle_time_minutes') * 60;
        // \assert(!\is_null($maximum_idle_time_seconds));
        // \assert(is_numeric($maximum_idle_time_seconds));

        // $activity_idle_time_seconds = time() - $session->get(SessionVariables::ActivityTimestamp->value, $maximum_idle_time_seconds + 1);

        // if ($activity_idle_time_seconds > $maximum_idle_time_seconds) {
        // // $session->forget(SessionVariables::ActivityTimestamp->value);
        // // $session->forget(SessionVariables::LoginTimestamp->value);
        // // $session->forget(SessionVariables::ApiToken->value);
        // return false;
        // }
        // } catch (\Throwable $exception) {
        // \App\Facades\Handler::logWarning($exception->getMessage(), ['path' => $request->path(),'session' => $request->session()->all()]);
        // \App\Facades\Handler::report($exception);
        // }

        // $session->put(SessionVariables::ActivityTimestamp->value, time());
        // $session->save();

        return true;
    }
}
