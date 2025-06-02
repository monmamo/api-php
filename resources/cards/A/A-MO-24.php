<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sniper')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Choose a Monster, Master, Mobster or Bystander </x-card.normalrule>
<x-card.normalrule>on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Monster: That Monster takes 2d6 @damage.</x-card.normalrule>
<x-card.normalrule>Others: If 1d4 is 2,3,4, Exile the card.</x-card.normalrule> 
<x-card.normalrule>Discard all cards attached to that card.</x-card.normalrule>
</text>
 </x-card.phaserule>

HTML;
    }
};
