<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
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
#[IsGeneratedImage([])]
class(__FILE__) implements CardComponents
{
    use CardTools;
    use DefaultCardAttributes;

    /**
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield $this->fullSizeBackground('fullsize/A-MA-05.png');
    }

    public function content(): \Traversable
    {
        yield '';
    }
};
