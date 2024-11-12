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

// effect:: Tetrapod, Fur, Paw.
// image generation prompt:: foxlike, foxform

// requires: [[Fur]], [[Long Tail]]
// research material: https://vulpesevolution.blogspot.com/

#[Gloss('Fox-forms.')]
#[NeuterName('Vulpon')]
#[MasculineAnthropeName('Vulpander')]
#[MasculineMonsterName('Vulpor')]
#[FeminineAnthropeName('Vulpquin')]
#[FeminineMonsterName('Vulpess')]
#[Rarity(Silvadys::class, Pronos::class, 3)]
#[SizeDelta(Silvadys::class, Pronos::class)]

class Vulpos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
