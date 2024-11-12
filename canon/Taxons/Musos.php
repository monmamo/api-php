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

// image generation prompt:: mouselike, mouseform, small rodent

#[Gloss('Mouse-forms, small rodents.')]
#[NeuterName('Muson')]
#[MasculineAnthropeName('Musander')]
#[MasculineMonsterName('Musor')]
#[FeminineAnthropeName('Musquin')]
#[FeminineMonsterName('Musess')]
#[Rarity(Rodentos::class, Pygmys::class, 2)]
#[SizeDelta(Rodentos::class, Pygmys::class, -0.2)]
class Musos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Rodentos';
    }
}
