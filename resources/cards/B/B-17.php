<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://en.wikipedia.org/wiki/Diarrhea

return new
    #[Title('Diarrhea')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >For all Monsters, Attack -1d6 and Defense -1d6.</x-card.cardrule>
HTML;}};
