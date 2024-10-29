<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Head Coach')]

    #[Concept('Master')]
    #[Concept('Coach')]
    #[Concept('Male')]
    #[Concept('Integrity', '2d6')]
    #[IsGeneratedImage('head coach standing on the sidelines with a clipboard, green jacket')]
    #[LocalHeroImage('A-055.png')]
    #[Prerequisites(y: 460, lines: ['Limit 1 per player on Battlefield.', 'You may choose to make this card Female', 'when you put it on the Battlefield.'])]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Resolution" :lines="3">
        <text >
<x-card.normalrule>Your Monsters' attacks</x-card.normalrule>
<x-card.normalrule>do 1d6 more damage and</x-card.normalrule>
<x-card.normalrule>defenses prevent 1d6 more damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
