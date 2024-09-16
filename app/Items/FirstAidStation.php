<?php

namespace App\Items;

use App\Contracts\Item;
use App\GeneralAttributes\Title;

#[Title('First Aid Station')]
class FirstAidStation implements Item {}

// metatype:: [[Item]] [[Durable]]

// playable card type:: [[Durable]]
// card set:: [[First Aid Card Set]]
// card ID:: FA-06
// ---
// UPKEEP:: You may "attach" a Monster to First Aid Station. That Monster may not use any Skills nor be affected by any Skills during this turn. At the end of this turn, remove all damage and [[Bane]]s from that Monster and "detach" it from First Aid Station.
