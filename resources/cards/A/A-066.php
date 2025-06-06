
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
    <x-card.normalrule>Discard the highest-level Monster</x-card.normalrule>
<x-card.normalrule>of each opponent</x-card.normalrule>
<x-card.normalrule>and all cards attached to that Monster.</x-card.normalrule>
    </x-card.cardrule>
HTML;
    }
};
