<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// Fire.

// ,0,"Myrmidon , Candesce ",Calienta Rey ,Pyror,Pyrquin,Pyress,Pyrander,
// [[essential power]]. Fire.
// Color: Red

// https://huggingface.co/datasets/monmamo/pyros
// https://bulbapedia.bulbagarden.net/wiki/Fire_(type)
// ### Defense
// Very few Fire-type Pokémon have a secondary type that negates their weakness to [Water-type](https://bulbapedia.bulbagarden.net/wiki/Water_%28type%29) attacks. On the other hand, most Fire types can learn [Solar Beam](https://bulbapedia.bulbagarden.net/wiki/Solar_Beam_%28move%29) to counter all three of the type's weaknesses. Fire has six resistances.
// The Fire type grants immunity to [burns](https://bulbapedia.bulbagarden.net/wiki/Burn_%28status_condition%29) and the sea of fire caused by [Grass Pledge](https://bulbapedia.bulbagarden.net/wiki/Grass_Pledge_%28move%29) and [Fire Pledge](https://bulbapedia.bulbagarden.net/wiki/Fire_Pledge_%28move%29).
// ### Offense
// During [harsh sunlight](https://bulbapedia.bulbagarden.net/wiki/Harsh_sunlight) or extremely harsh sunlight, the power of Fire-type attacks is increased by 50%. The power of Fire-type attacks is decreased by 50% during [rain](https://bulbapedia.bulbagarden.net/wiki/Rain), while all Fire-type moves will fail during heavy rain. When [Water Sport](https://bulbapedia.bulbagarden.net/wiki/Water_Sport_%28move%29) is in effect, the power of Fire-type moves is decreased by 67%. When used under the effect of [Powder](https://bulbapedia.bulbagarden.net/wiki/Powder_%28move%29), Fire attacks will damage the user by 1/4 of its max HP instead of executing normally.
// The Fire type enables the use of [Burn Up](https://bulbapedia.bulbagarden.net/wiki/Burn_Up_%28move%29), though Burn Up removes the user's Fire type.

// Flame Body  21  Contact with the monsters may burn the attacker.    3

#[NeuterName('Pyron')]
#[MasculineAnthropeName('Pyrander')]
#[MasculineMonsterName('Pyror')]
#[FeminineAnthropeName('Pyrquin')]
#[FeminineMonsterName('Pyress')]
#[Rarity('powers')]
class Pyros extends BaseTaxon
{
    use Power;
}
