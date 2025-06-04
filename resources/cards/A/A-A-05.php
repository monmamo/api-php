<?php

// https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Fireball')]
    #[Concept('Attack')]
    #[Concept('Pyros')]
    #[Concept('Level', 25)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-A-05.jpg</x-card.hero.local>

    <x-card.flavortext>If you can Dodge a wrench, you can Dodge a Fireball.</x-card.flavortext>


    <x-card.phaserule type="Resolution" >
<text>
<x-card.normalrule>Discard any number of Fire (A-002)</x-card.normalrule>
<x-card.normalrule>attached to this Monster.</x-card.normalrule>
<x-card.normalrule>Does Boost @damage for each Fire discarded.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
        }
    };
