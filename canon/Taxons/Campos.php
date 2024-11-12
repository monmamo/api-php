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

#[Gloss('Dolphin forms. Fins instead of legs or arms. Exclusively aquatic.')]
#[NeuterName('Campon')]
#[MasculineAnthropeName('Campander')]
#[MasculineMonsterName('Campor')]
#[FeminineAnthropeName('Campquin')]
#[FeminineMonsterName('Campess')]
#[Rarity(Aquadys::class)]
#[SizeDelta(Aquadys::class, 0.3)]
class Campos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Aquadys';
    }
}
