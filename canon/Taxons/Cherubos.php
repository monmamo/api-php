<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

// supertaxons:: [[Hominos]] [[Angelos]] [[Pygmys]]

// ,"Hominos , Angelos , ",Eleanor Raindancer ,
// genus:: Pygmy angel-form hominid.
// Requires: [[Angel Wings]]

#[NeuterName('Cherubon')]
#[MasculineAnthropeName('Cherubander')]
#[MasculineMonsterName('Cherubor')]
#[FeminineAnthropeName('Cherubquin')]
#[FeminineMonsterName('Cherubess')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(-.5)]
class Cherubos extends BaseTaxon {}
