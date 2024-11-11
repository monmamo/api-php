<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Does not indicate rideability.

#[Gloss('Hooved quadrupeds.')]
#[NeuterName('Ungulon')]
#[MasculineMonsterName('Ungulor')]
#[FeminineMonsterName('Unguless')]
final class Ungulos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 100;
    }

    public static function sizeDelta(): float
    {
        return 0; // does not imply size
    }

    public static function subtaxons(): array
    {
        return [
            Bovos::class => 0.27,
            Cervos::class => 0.1,
            Capros::class => 0.1,
            Suinos::class => 0.33,
            Equos::class => 0.1,
            Dibos::class => 0.1,
        ];
    }
}
