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

#[Gloss('Wight, elf, wraith.')]
#[NeuterName('Vecton')]
#[MasculineAnthropeName('Vectander')]
#[MasculineMonsterName('Vector')]
#[FeminineAnthropeName('Vectquin')]
#[FeminineMonsterName('Vectess')]
#[Rarity(Hominos::class, 5)]
#[SizeDelta(Hominos::class, -0.3)]
class Vectos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
