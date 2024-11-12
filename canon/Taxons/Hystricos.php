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

#[NeuterName('Hystricon')]
#[MasculineAnthropeName('Hystricander')]
#[MasculineMonsterName('Hystricor')]
#[FeminineAnthropeName('Hystricquin')]
#[FeminineMonsterName('Hystrix')]
#[Gloss('Quilled-rodent forms.')]
#[Rarity(Rodentos::class, Quilos::class, 2)]
#[SizeDelta(Rodentos::class, Quilos::class)]
class Hystricos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Rodentos';
    }
}
