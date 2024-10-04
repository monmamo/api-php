<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Gather Fire')]
#[\App\Concept('Draw')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
#[\App\CardAttributes\ConceptIconHeroImage('Pyros')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
       yield <<<'HTML'
    <text y="500" filter="url(#solid)">
<x-card.normalrule>Transfer a Fire Mana card from your Discard</x-card.normalrule>
<x-card.normalrule>pile to one of your Pyros Monsters.</x-card.normalrule>
    </text>
HTML;
    }
};
