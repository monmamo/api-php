<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;

// Color: Rainbow
// [[legendary power]]
// Innocence, tolerance and relationships.
// Can mask powers of the flesh and fail in certain combinations of the beholder's species/race, the attacker's power and the attacker's species/race.

#[MasculineAnthropeName('Iridander')]
#[MasculineMonsterName('Iridir')]
#[FeminineAnthropeName('Iridiquin')]
#[FeminineMonsterName('Iridess')]

class Iridis extends BaseTaxon
{
    public static function rarity(): float
    {
        return 10000000000;
    }
}
