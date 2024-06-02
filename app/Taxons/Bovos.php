<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// All: [[Long Tail]], [[Anterior Hooves]], [[Posterior Hooves]], [[Dual Cranial Horns]]
// Females:  [[Milking]]

// ,Ungulos ,Capros ,,,
// . Cow-forms.
// Alternatives:
// Masculine: Bovor
// Feminine: Bovess, Boquin

// [[genus]] of phylum [[Ungulos]]
#[Gloss('Cow-forms.')]
#[NeuterName('Bovon')]
#[MasculineAnthropeName('Bovander')]
#[MasculineMonsterName('Bovor')]
#[FeminineAnthropeName('Bovquin')]
#[FeminineMonsterName('Bovess')]
class Bovos extends Ungulos
{
}
