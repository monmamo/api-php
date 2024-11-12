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

// [[genus]] of phylum [[Rodentos]].

#[Gloss('Hedgehog forms, urchins.')]
#[NeuterName('Ericion')]
#[MasculineAnthropeName('Ericiander')]
#[MasculineMonsterName('Ericior')]
#[FeminineAnthropeName('Ericiquin')]
#[FeminineMonsterName('Ericiess')]
#[Rarity(Rodentos::class, 200)]
#[SizeDelta(Rodentos::class, -.3)]
class Ericios extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Rodentos';
    }
}
