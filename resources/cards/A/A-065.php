<?php

// https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Firebreath')]
#[Concept('Trait')]
#[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
#[FlavorText('Halitosis (A-110) is the least of your problems.')]
#[Prerequisites(lines: 'Requires Pyros.', y: 340)]
#[LocalHeroImage('hero/firebreath.jpeg')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="5">
<text>
<x-card.smallrule>When this Monster attacks or defends</x-card.smallrule>
<x-card.smallrule>& has 1+ Fire (A-002) attached & is </x-card.smallrule>
<x-card.smallrule>not already consuming Fire, the defending/</x-card.smallrule>
<x-card.smallrule>attacking Monster takes 1d6-1 @damage. </x-card.smallrule>
<x-card.smallrule>If the defending/attacking Monster </x-card.smallrule>
<x-card.smallrule>takes any damage, discard 1 Fire from this Monster.</x-card.smallrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
