<?php

namespace App\Items;

use App\Contracts\Item;
use App\GeneralAttributes\Gloss;

// A Monster can wear only one set of Gloves at a time.
// Spongy Gloves https://bulbapedia.bulbagarden.net/wiki/Spongy_Gloves_(Fusion_Strike_243)
// Struggle Gloves https://bulbapedia.bulbagarden.net/wiki/Struggle_Gloves_(Darkness_Ablaze_171)
// Rubber Gloves https://bulbapedia.bulbagarden.net/wiki/Rubber_Gloves_(Evolving_Skies_156)
// The attacks of the Pokémon this card is attached to do 30 more damage to your opponent's Active ![Lightning](https://archives.bulbagarden.net/media/upload/thumb/0/04/Lightning-attack.png/20px-Lightning-attack.png)[🔗](https://bulbapedia.bulbagarden.net/wiki/Lightning_Energy_%28TCG%29) Pokémon _(before applying Weakness and Resistance)_.
// Weeding Gloves https://bulbapedia.bulbagarden.net/wiki/Weeding_Gloves_(Chilling_Reign_155)
// Discard one Grass mana attached to this Monster
// Digging Gloves https://bulbapedia.bulbagarden.net/wiki/Digging_Gloves_(Evolving_Skies_145)
// playable card type:: [[Glove]]
// The attacks of the Pokémon this card is attached to do 30 more damage to your opponent's Active [[Fighting]] Pokémon _(before applying Weakness and Resistance)_.

#[Gloss('A Durable item that can be worn only on a Monster\'s anterior extremities.')]
class Glove implements Item {}
