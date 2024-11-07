<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[Gloss('Angel-forms. Large, powerful wings; no tail.')]
#[NeuterName('Angelon')]
#[MasculineAnthropeName('Angelander')]
#[MasculineMonsterName('Angelor')]
#[FeminineAnthropeName('Angelquin')]
#[FeminineMonsterName('Angeless')]
class Angelos implements Taxon
{
    public static function rarity(): float
    {
        return 100;
    }

    public static function sizeDelta(): float
    {
        return 0.3;
    }
}

// winged morphotype,,,,
// winged morphotype:: Angel-forms. Large, powerful wings; no tail. "Cherubos , Seraphos ",,,,,,,,,angel,,
