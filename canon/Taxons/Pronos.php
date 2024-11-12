<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\PostureMorphotype;

#[Rarity(4 / 3)]
final class Pronos extends BaseTaxon
{
    use PostureMorphotype;
}
