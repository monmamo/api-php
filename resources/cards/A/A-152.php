<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Favorite Toy')]
#[Concept('Item')]
#[IsGeneratedImage]
#[LocalHeroImage('hero/A-152.png')]
#[Prerequisites(lines: 'Attach this card to a Monster.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
<x-card.normalrule>If this Monster doesn't attack,</x-card.normalrule>
<x-card.normalrule>restore 2 @damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
