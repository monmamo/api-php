<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('First Aid Cart')]
#[Prerequisites(['Put this card in the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Discard a Monster card and all cards attached to it from the Battlefield. Put this card on the bottom of your Library.</x-card.normalrule>
</text>
 </x-card.phaserule>

HTML;
    }
};
