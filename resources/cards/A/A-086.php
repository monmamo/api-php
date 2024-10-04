<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Pulse')]
#[Concept('Trait')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
#[\App\CardAttributes\ConceptIconHeroImage('Aquos')]
#[\App\CardAttributes\Prerequisites(lines:['Requires Aquos.','Use when this Monster attacks or defends.'],y:460)]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>When resolving, discard 1d6 Water cards</x-card.normalrule>
<x-card.normalrule>from this Monster. The defending or attacking </x-card.normalrule>
<x-card.normalrule>Monster takes 1d6 damage for each Water </x-card.normalrule>
<x-card.normalrule>card actually discarded.</x-card.normalrule>
    </text>
HTML;
    }
};
