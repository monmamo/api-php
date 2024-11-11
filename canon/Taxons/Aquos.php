<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// essential power:: Water.

// image generation prompt:: [[needs representative image]]

// Color: Blue

// Rain Dance: Summons a downpour, enhancing water-based abilities and potentially hindering fire-based opponents.
// **Rain Dance** As often as you like during your turn (before your attack), you may attach 1 Water Energy Card to 1 of your Water Monster. (This doesn't use up your 1 Energy card attachment for the turn.) This power can't be used if this Monster is under any Special Condition. Blastoise L52.
// Whirlpool Bind: Traps the opponent in a mini whirlpool, restricting their movement.
// Steam Engine    3   Drastically raises [[Speed]] when hit by a [[Fire]]- or [[Water]]-type move.    8
// Torrent 30  Powers up [[Water]]-type moves in a pinch.  3
// Swift Swim  47  Boosts the monsters's [[Speed]] in rain.    3
// Water Veil  13  Prevents the monsters from getting a burn.  3
// [[Water]] Bubble    2   Halves damage from Fire-type moves, doubles power of [[Water]]-type moves used, and prevents burns. 7
// [[Water]] Compaction    2   Sharply raises Defense when hit by a [[Water]]-type move.   7
// **Hydroelectric Power** You may make this Monster's Floodlight attack do 10 more damage for each Energy attached to this Monster but not used to pay for Floodlight's Energy cost. This power can't be used if this Monster is under any Special Condition. Lanturn L26.

#[NeuterName('Aquon')]
#[MasculineAnthropeName('Aquander')]
#[MasculineMonsterName('Aquor')]
#[FeminineAnthropeName('Aququin')]
#[FeminineMonsterName('Aquess')]
class Aquos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 70;
    }
}
