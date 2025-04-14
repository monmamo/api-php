<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Monster Heist')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Discard two of your Mobsters from the Battlefield
    to discard one opposing Monster from the Battlefield.</x-card.normalrule>
    </text>
 </x-card.phaserule>
HTML;
    }
};
