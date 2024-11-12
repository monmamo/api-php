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

// image generation prompt:: otterlike, otterform
// image tags:: otter

#[Gloss('Otter-form.')]
#[NeuterName('Lutron')]
#[MasculineAnthropeName('Lutrander')]
#[MasculineMonsterName('Luter')]
#[FeminineAnthropeName('Lutriquin')]
#[FeminineMonsterName('Lutress')]
#[NeuterName('Lutron')]
#[MasculineAnthropeName('Lutrander')]
#[MasculineMonsterName('Lutror')]
#[FeminineAnthropeName('Lutrquin')]
#[FeminineMonsterName('Lutress')]
#[Rarity(Aquadys::class, Pronos::class)]
#[SizeDelta(Aquadys::class, Pronos::class, 0.1)]
class Lutros extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Aquadys';
    }
}
