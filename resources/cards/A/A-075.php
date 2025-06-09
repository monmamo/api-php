<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sheriff')]
#[Concept('Bystander')]
#[Concept('Integrity', '2d6')]
#[Concept('DamageCapacity', 14)]
#[Concept('Size', 5)]
#[Concept('Speed', 3)]
#[IsGeneratedImage]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A245.png</x-card.hero.local>

<x-card.flavortext>I am the law.</x-card.flavortext>


    <text y="600" filter="url(#solid)">
<x-card.ruleline class="smallrule">Limit 1 on Battlefield among all players.</x-card.ruleline>
<x-card.ruleline class="smallrule">You may choose to make this card Male or Female</x-card.ruleline>
<x-card.ruleline class="smallrule">when you put it on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Mobster and Criminal cards cannot use</x-card.ruleline>
<x-card.ruleline>effects while this card is on the Battlefield.</x-card.ruleline>
</text>
HTML;
    }
};
