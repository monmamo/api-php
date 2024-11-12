<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Phylum;

// Does not imply size or rideability.

#[Gloss('Hooved quadrupeds.')]
#[NeuterName('Ungulon')]
#[MasculineMonsterName('Ungulor')]
#[FeminineMonsterName('Unguless')]
#[Rarity('phyla')]
class Ungulos extends BaseTaxon
{
    use Phylum;

    public static function subtaxonRarity(string $fqn): float
    {
        return match ($fqn) {
            Bovos::class => 0.27,
            Cervos::class => 0.1,
            Capros::class => 0.1,
            Suinos::class => 0.33,
            Equos::class => 0.1,
            Dibos::class => 0.1
        };
    }
}
