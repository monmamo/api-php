<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Herbal Scent')]
#[Concept('Trait')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
#[\App\CardAttributes\Prerequisites(lines:'Requires Floros.',y:460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">
<x-card.normalrule>Resolution phase (all players):</x-card.normalrule>
<x-card.normalrule>Before resolving attacks, remove 1d4 damage from each Monster on the Battlefield.</x-card.normalrule>
    </text>
HTML;
    }
};


//     <image x="0" y="0" class="hero" href="@local(TODO.png)"  />



