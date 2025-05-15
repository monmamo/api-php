<?php

namespace App\CardAttributes;

trait RaidCardAttributes
{
    /**
     * String indicating the system or game that the card belongs to.
     *
     * @group nonary
     */
    public function system(): string
    {
        return 'Raid on Leaser Ridge';
    }
}
