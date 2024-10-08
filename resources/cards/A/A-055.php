<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Defensive Coordinator')]

    #[Concept('Bystander')]
    #[Concept('Coach')]
     #[Concept('Male')]
      #[Concept('Integrity', '1d6')]
    #[IsGeneratedImage]
    #[LocalHeroImage('A-055.png')]
    #[Prerequisites(['Limit 1 per player on Battlefield.', 'You must already have a Head Coach on the Battlefield', 'to put this card on the Battlefield.', 'You may choose to make this card Female', 'when you put it on the Battlefield.'])]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
<x-card.normalrule>You may put the Defense cards you use</x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
