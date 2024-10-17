<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Angelon')]
#[MasculineAnthropeName('Angelander')]
#[MasculineMonsterName('Angelor')]
#[FeminineAnthropeName('Angelquin')]
#[FeminineMonsterName('Angeless')]
class Angelos implements Taxon
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

// Angel-forms. Large, powerful wings; no tail.
// winged morphotype,,,,"Cherubos , Seraphos ",,,,,,,,,angel,,
// winged morphotype:: Angel-forms. Large, powerful wings; no tail.
// alternate names
// Masculine: Angelor
// Feminine: Angeless
// Plural:
// rarity: 20
