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

// winged morphotype::
// prompt: angel mammal monster of weird zoology

#[Gloss('Angel-forms. Large, powerful wings; no tail.')]
#[NeuterName('Angelon')]
#[MasculineAnthropeName('Angelander')]
#[MasculineMonsterName('Angelor')]
#[FeminineAnthropeName('Angelquin')]
#[FeminineMonsterName('Angeless')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(0.3)]
class Angelos extends BaseTaxon {}
