<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

#[Gloss('Bone plates protruding from the spine and tail.')]
#[NeuterName('Stegon')]
#[MasculineAnthropeName('Stegander')]
#[MasculineMonsterName('Stegor')]
#[FeminineAnthropeName('Stegquin')]
#[FeminineMonsterName('Stegess')]
#[Rarity(200000)]
class Stegos extends BaseTaxon {}
