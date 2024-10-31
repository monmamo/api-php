<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Gather Fire')]
#[Concept('Draw')]
#[ImageCredit('Icon by Carl Olsen under CC BY 3.0 on Game-Icons.Net')]
#[ConceptIconHeroImage('Pyros')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="610" filter="url(#solid)">
<x-card.normalrule>Transfer a Fire card (A-002) from your Discard</x-card.normalrule>
<x-card.normalrule>pile to one of your Pyros Monsters.</x-card.normalrule>
    </text>
HTML;
    }
};
