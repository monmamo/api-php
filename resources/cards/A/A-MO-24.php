<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sniper')]
#[Concept('Cost', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Choose a Monster, Mobster or Bystander</x-card.ruleline>
<x-card.ruleline>on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Monster: That Monster takes 2d6 @damage.</x-card.ruleline>
<x-card.ruleline>Others: If 1d4 is 2,3,4, Exile the card.</x-card.ruleline> 
<x-card.ruleline>Discard all cards attached to that card.</x-card.ruleline>
</text>
 </x-card.phaserule>

HTML;
    }
};
