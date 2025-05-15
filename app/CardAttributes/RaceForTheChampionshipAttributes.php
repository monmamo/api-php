<?php

namespace App\CardAttributes;

trait RaceForTheChampionshipAttributes
{
    /**
     * String indicating the system or game that the card belongs to.
     *
     * @group nonary
     */
    public function system(): string
    {
        return 'Race for the Championship';
    }
}
