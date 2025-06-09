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
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Discard 2 cards for each Bystander on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Remove all Bystanders from the Battlefield.</x-card.ruleline>
</text>
 </x-card.phaserule>
HTML;
    }
};
