<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Species;

#[Gloss('Flying mouse form, bat form.')]
#[NeuterName('Flegermuson')]
#[MasculineMonsterName('Flegermusor')]
#[FeminineMonsterName('Flegermusess')]
#[Rarity(Musos::class, Flegeros::class)]
#[SizeDelta(Musos::class, Flegeros::class)]

class Flegermusos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Musos';
    }
}
