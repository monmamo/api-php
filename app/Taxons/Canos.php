<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Canon')]
#[MasculineAnthropeName('Canander')]
#[MasculineMonsterName('Canor')]
#[FeminineAnthropeName('Canquin')]
#[FeminineMonsterName('Caness')]
#[Gloss('Dog forms.')]
#[NeuterName('Canon')]
#[MasculineAnthropeName('Canander')]
#[MasculineMonsterName('Canor')]
#[FeminineAnthropeName('Canquin')]
#[FeminineMonsterName('Caness')]
class Canos implements Taxon
{
    public static function rarity(): float
    {
        return 5;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
