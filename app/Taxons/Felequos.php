<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Felequon')]
#[MasculineAnthropeName('Felequander')]
#[MasculineMonsterName('Felequor')]
#[FeminineAnthropeName('Feleququin')]
#[FeminineMonsterName('Felequess')]
class Felequos implements Taxon
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

// ![](https://img.playbook.com/k_zsTMcwQVymUYGAa31ADnRg2-sURfDKb5gnpY-PVeM/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzEzNTI1NmVh/LWFjYzUtNGFkNS1i/NzQyLWFkZGU1NWRm/MjhhNw)
// A horselike monster with head and fur like a cat's.

// Felos:: ((SHHBZ0hMD))

// image tags:: ((tW8grNiJ1)), ((QL9tisSu0))
