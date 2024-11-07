<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Getaway Car')]
#[Concept('Vehicle')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Shuffle 1d6 of your Mobsters in play, all cards attached to those cards, and this card into your Library.</x-card.normalrule>
</text>
 </x-card.phaserule>
HTML;
    }
};
