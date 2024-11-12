<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Species;

// ![](https://img.playbook.com/k_zsTMcwQVymUYGAa31ADnRg2-sURfDKb5gnpY-PVeM/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzEzNTI1NmVh/LWFjYzUtNGFkNS1i/NzQyLWFkZGU1NWRm/MjhhNw)
#[Gloss('A horselike monster with head and fur like a cat\'s.')]
#[NeuterName('Felequon')]
#[MasculineAnthropeName('Felequander')]
#[MasculineMonsterName('Felequor')]
#[FeminineAnthropeName('Feleququin')]
#[FeminineMonsterName('Felequess')]
#[Rarity(Equos::class, 100)]
#[SizeDelta(Equos::class, -0.3)]
class Felequos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Equos';
    }
}
