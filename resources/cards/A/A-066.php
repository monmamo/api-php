
<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageInDevelopment;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cruel Order')]
#[Concept('Catastrophe')]
#[ImageCredit('Generated with StarryAI. Placeholder image.')]
#[ImageInDevelopment] // Merry
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>A066.jpeg</x-card.hero.local>

    <x-card.cardrule :>
    <x-card.ruleline>Discard the highest-level Monster</x-card.ruleline>
<x-card.ruleline>of each opponent</x-card.ruleline>
<x-card.ruleline>and all cards attached to that Monster.</x-card.ruleline>
    </x-card.cardrule>
HTML;
    }
};
