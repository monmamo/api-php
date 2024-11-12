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

// species of genus Hominos.

#[Gloss('Troll-forms.')]
#[NeuterName('Truslon')]
#[MasculineAnthropeName('Truslander')]
#[MasculineMonsterName('Truslor')]
#[FeminineAnthropeName('Truselquin')]
#[FeminineMonsterName('Trusless')]
#[Rarity(Hominos::class, 30)]
#[SizeDelta(Hominos::class, -0.3)]
class Truslos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
