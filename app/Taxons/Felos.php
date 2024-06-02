<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// genus:: of  [[Silvadys]] with [[Pronos]] form
// https://huggingface.co/datasets/monmamo/felos

// image generation prompt:: [[needs representative image]]
// effect:: Tetrapod.

// cat, catmonster, catcharacter, cat_character, feline, felinemonster, felinecharacter, feline_character
// catanthro, cat_anthro

// The [fell](http://monmamo.wikidot.com/species:fell)s evolved first, then gave rise to the [lee](http://monmamo.wikidot.com/species:lee). In the jungles of [[Asis]], the lee gave rise to the [chimer](http://monmamo.wikidot.com/species:chimer).
#[Gloss('Cat-forms.')]
#[NeuterName('Fellon')]
#[MasculineAnthropeName('Felander')]
#[MasculineMonsterName('Feller')]
#[FeminineAnthropeName('Felquin')]
#[FeminineMonsterName('Felless')]

class Felos implements Taxon
{
    public static function rarity(): float
    {
        return Silvadys * 15;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
