<?php

namespace App\Items;

use App\Contracts\Item;
use App\GeneralAttributes\Title;

#[Title('Coal Fired Factory')]
class CoalFiredFactory implements Item {}

// metatype:: [[Item]] [[Durable]] [[Factory]]

// Available to all players while on the Battlefield.
// Draw phase:: Discard a [[Fire]] card from your hand. Then draw 3 cards.
