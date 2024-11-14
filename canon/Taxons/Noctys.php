<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Morphotype;

#[Gloss('Attacks diminish during the day.')]
#[NeuterName('Noctyn')]
#[MasculineAnthropeName('Noctyander')]
#[MasculineMonsterName('Noctyr')]
#[FeminineAnthropeName('Noctyquin')]
#[FeminineMonsterName('Noctyss')]
#[Rarity(1000)]
class Noctys extends BaseTaxon
{
    use Morphotype;
}
