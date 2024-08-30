<?php

namespace App\Http\Middleware;

use App\Enums\Hosts;

/**
 * The TrustHosts middleware instructs Laravel to only respond to certain host names. Our valid host names are defined in the Hosts enum.
 *
 * @see https://laravel.com/docs/10.x/requests#configuring-trusted-hosts
 *
 * @author Laravel
 */
final class TrustHosts extends \Illuminate\Http\Middleware\TrustHosts
{
    /**
     * Returns the host patterns that should be trusted.
     *
     *
     * @author Laravel
     * @implements \Illuminate\Http\Middleware\TrustHosts::hosts
     * @group multivalue
     * @group nonary
     *
     * @uses \App\Enums\Hosts::cases
     *
     * @return array<int, null|string>
     */
    public function hosts()
    {
        $result = [];

        foreach (Hosts::cases() as $enum) {
            $result[] = $enum->value;
        }
        return $result;
    }
}
