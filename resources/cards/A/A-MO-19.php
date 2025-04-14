<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bread and Circuses')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Discard 2 cards for each Bystander on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Remove all Bystanders from the Battlefield.</x-card.normalrule>
</text>
 </x-card.phaserule>
HTML;
    }
};
