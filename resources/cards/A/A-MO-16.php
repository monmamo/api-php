<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Monster Heist')]
#[Concept('Cost', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Discard two of your Mobsters</x-card.ruleline>
<x-card.ruleline>to discard one opposing Monster.</x-card.ruleline>
<x-card.ruleline>Then discard this card.</x-card.ruleline>
    </text>
 </x-card.phaserule>
HTML;
    }
};
