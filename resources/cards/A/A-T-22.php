<?php

// https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Firebreath')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
    #[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
#[Prerequisites(lines: 'Requires Pyros.', y: 340)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/Firebreath.jpg</x-card.hero.local>

<x-card.flavortext>Halitosis (A-110) is the least of your problems.</x-card.flavortext>

<x-card.phaserule type="Resolution" >
<text>
<x-card.ruleline class="smallrule">When this Monster attacks or defends &amp; has</x-card.ruleline>
<x-card.ruleline class="smallrule">1+ Fire (A-002) attached & is not already</x-card.ruleline>
<x-card.ruleline class="smallrule">consuming Fire, the defending/attacking Monster</x-card.ruleline>
<x-card.ruleline class="smallrule">takes 1d6-1 @damage. </x-card.ruleline>
<x-card.ruleline class="smallrule">If the defending/attacking Monster </x-card.ruleline>
<x-card.ruleline class="smallrule">takes any damage, discard 1 Fire from this Monster.</x-card.ruleline>
    </text>
    </x-card.phaserule>
HTML;
    }
};
