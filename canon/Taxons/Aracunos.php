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
use Canon\Taxons\Types\Species;

#[Gloss('Raccoon-forms.')]
#[NeuterName('Aracunon')]
#[MasculineAnthropeName('Aracunander')]
#[MasculineMonsterName('Aracunor')]
#[FeminineAnthropeName('Aracunquin')]
#[FeminineMonsterName('Aracuness')]
#[Rarity(Ursos::class, Pygmys::class)]
#[SizeDelta(Ursos::class, Pygmys::class)]
class Aracunos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Ursos';
    }
}
