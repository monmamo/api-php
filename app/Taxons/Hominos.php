<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Hominon')]
#[MasculineAnthropeName('Hominander')]
#[MasculineMonsterName('Hominor')]
#[FeminineAnthropeName('Hominquin')]
#[FeminineMonsterName('Hominess')]
class Hominos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// phylum with [[Erectos]] form.

// Anthropomorphic forms.
// These monsters are shaped like anthropes. They walk erect on two legs, have two arms with usable paws or hands, and have a strong [[Skull]].  They tend to have a lean build.

// Attributes:
// Requires: [[Arm]], [[Skin]], [[Skull]]

// 20

// 0
// Posterior Physical Strength:: 10
// Anterior Physical Strength:: 10
// Counterattacking Strength:: 5
// Emotional Strength:: 25
// Intelligence:: 25
// Spiritual Strength:: 25
