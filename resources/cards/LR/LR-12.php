<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tattle')]
#[Concept('Cost', 3)]
#[Concept('Training', 2)]
#[ImageCredit('Icon by Lorc from Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Each other player gets</x-card.ruleline>
    <x-card.ruleline>+2 Noise.</x-card.ruleline>
</x-card.cardrule>

HTML;
    }
};
