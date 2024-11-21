<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://en.wikipedia.org/wiki/Rabies

return new
    #[Title('Blizzard')]
    #[Concept('Catastrophe')]
    #[FlavorText('Not the ice cream treat.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >TODO</x-card.cardrule>
HTML;}};
