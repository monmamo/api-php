<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\PostureMorphotype;

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Erect Posture]]

#[Rarity(4)] // 25% of all monsters.
#[SizeDelta(0.5)]
final class Erectos extends BaseTaxon
{
    use PostureMorphotype;
}
