<?php

use App\CardAttributes\CardNameColor;
use App\CardAttributes\CardTools;
use App\CardAttributes\CreditColor;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Stealth Girl')]
#[Concept('Master')]
#[Concept('Female')]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 3)]
#[Concept('Speed', 5)]
#[IsGeneratedImage([])]
#[CreditColor('#000000')]
#[CardNameColor('#000000')]
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
        yield $this->fullSizeBackground('fullsize/A-MA-06.jpeg');
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
