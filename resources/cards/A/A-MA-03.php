<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Jock (Male)')]
#[Concept('Master')]
#[Concept('Male')]
#[Concept('DamageCapacity', 13)]
#[Concept('Size', 4)]
#[Concept('Speed', 4)]
#[IsGeneratedImage([])]
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
        yield $this->fullSizeBackground('fullsize/A-MA-03.png');
    }

    public function content(): \Traversable
    {
        yield '';
    }
};
