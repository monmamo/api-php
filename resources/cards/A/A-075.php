<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
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
#[Prerequisites(['Limit 1 on Battlefield among all players.', 'You may choose to make this card Male or Female', 'when you put it on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A245.png</x-card.hero.local>

<x-card.flavortext>I am the law.</x-card.flavortext>

    <text y="600" filter="url(#solid)">
<x-card.normalrule>Discard all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>No more Mobster or Criminal cards can be</x-card.normalrule>
<x-card.normalrule>played while this card is on the Battlefield.</x-card.normalrule>
</text>
HTML;
    }
};
