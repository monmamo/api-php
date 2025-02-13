<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
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
#[LocalHeroImage('A245.png')]
#[FlavorText('I am the law.')]
#[Prerequisites(['Limit 1 on Battlefield among all players.', 'You may choose to make this card Male or Female', 'when you put it on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="600" filter="url(#solid)">
<x-card.normalrule>Discard all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>No more Mobster or Criminal cards can be</x-card.normalrule>
<x-card.normalrule>played while this card is on the Battlefield.</x-card.normalrule>
</text>
HTML;
    }
};
