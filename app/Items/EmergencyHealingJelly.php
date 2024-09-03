<?php
namespace App\Items;

use App\GeneralAttributes\Title;





// metatype:: [[Item]] [[Consumable]]

// playable card type:: [[Consumable]]
// card set:: [[Base Card Set]]
// card ID:: A-071
// ---
// Resolution phase:: If the Monster this card is attached to has 3 or less remaining damage capacity and has any damage counters on it, heal 12 damage from it. If you healed any damage in this way, discard this card.

#[Title('Emergency Healing Jelly')]
class EmergencyHealingJelly implements \App\Contracts\Item {}

