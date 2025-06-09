<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Brute')]
#[Concept('Master')]
#[Concept('Male')]
#[Concept('DamageCapacity', 15)]
#[Concept('Size', 5)]
#[Concept('Speed', 2)]
#[Concept('Training', 5)]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use CardTools;
    use DefaultCardAttributes;

    /**
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield $this->fullSizeBackground('fullsize/A-MA-05.jpeg');
    }

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="1" >
<x-card.ruleline>Limit 1 Master per player on Battlefield.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
