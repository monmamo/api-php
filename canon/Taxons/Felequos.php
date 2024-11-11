<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// ![](https://img.playbook.com/k_zsTMcwQVymUYGAa31ADnRg2-sURfDKb5gnpY-PVeM/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzEzNTI1NmVh/LWFjYzUtNGFkNS1i/NzQyLWFkZGU1NWRm/MjhhNw)
#[Gloss('A horselike monster with head and fur like a cat\'s.')]
#[NeuterName('Felequon')]
#[MasculineAnthropeName('Felequander')]
#[MasculineMonsterName('Felequor')]
#[FeminineAnthropeName('Feleququin')]
#[FeminineMonsterName('Felequess')]
class Felequos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Felos::rarity() * Equos::rarity() * 100;
    }

    public static function sizeDelta(): float
    {
        return Felos::sizeDelta() + Equos::sizeDelta();
    }
}
