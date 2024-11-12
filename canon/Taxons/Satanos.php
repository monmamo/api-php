<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// species of genus Hominos with Demonos and Megos forms.

#[NeuterName('Satanon')]
#[MasculineAnthropeName('Satanander')]
#[MasculineMonsterName('Satanor')]
#[FeminineAnthropeName('Satanquin')]
#[FeminineMonsterName('Sataness')]
#[Rarity(Hominos::class, Demonos::class, Megos::class)]
#[SizeDelta(Hominos::class, Demonos::class, Megos::class)]
class Satanos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
