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

// [[genus]].

#[Rarity(Silvadys::class, Pronos::class)]
#[SizeDelta(Silvadys::class, Pronos::class, -0.2)]
#[Gloss('Sloth-forms, anteater-forms.')]
#[NeuterName('Slovon')]
#[MasculineAnthropeName('Slovander')]
#[MasculineMonsterName('Slovor')]
#[FeminineAnthropeName('Slovquin')]
#[FeminineMonsterName('Slovess')]
class Slovos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
