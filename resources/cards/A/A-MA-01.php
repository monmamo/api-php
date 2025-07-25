<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Nerd (Male)')]
#[Concept('Master')]
#[Concept('Male')]
#[Concept('DamageCapacity', '12')]
#[Concept('Size', '4')]
#[Concept('Speed', '4')]
#[Concept('Training', 5)]
#[IsGeneratedImage('nerdy male anthropomorphic monster trainer')]
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
        yield $this->fullSizeBackground('fullsize/A-MA-01.jpeg');
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
