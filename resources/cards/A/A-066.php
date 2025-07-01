
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
#[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/CruelOrder.jpg</x-card.hero.local>

            <x-card.flavortext>They're just following orders.</x-card.flavortext>

    <x-card.cardrule>
    <x-card.ruleline>Discard the highest-level Monster</x-card.ruleline>
<x-card.ruleline>of each opponent</x-card.ruleline>
<x-card.ruleline>and all cards attached to that Monster.</x-card.ruleline>
    </x-card.cardrule>
HTML;
    }
};
