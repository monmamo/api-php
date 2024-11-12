<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// [[genus]]
// Not to be confused with [[Faunos]].

#[Gloss('Goat-forms with horns, a tail and hooves')]
#[NeuterName('Capron')]
#[MasculineAnthropeName('Caprander')]
#[MasculineMonsterName('Capror')]
#[FeminineAnthropeName('Caprquin')]
#[FeminineMonsterName('Capress')]
#[Rarity(Ungulos::class, 5)]
#[SizeDelta(Ungulos::class, 0.3)]
class Capros extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
