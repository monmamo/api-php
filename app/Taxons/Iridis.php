<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;

// Color: Rainbow
// [[legendary power]]
// Innocence, tolerance and relationships.
// Can mask powers of the flesh and fail in certain combinations of the beholder's species/race, the attacker's power and the attacker's species/race.

#[MasculineAnthropeName('Iridander')]
#[MasculineMonsterName('Iridir')]
#[FeminineAnthropeName('Iridiquin')]
#[FeminineMonsterName('Iridess')]

class Iridis implements Taxon
{
    public static function rarity(): float
    {
        return 10000000000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
