<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Karma')]

    #[Concept('Draw')]

#[LocalHeroImage('A139.jpg')]

    #[ImageCredit('ShutterStock #2389392699 by AnhSilhouetteArt')]

    #[FlavorText("It's a female monster.")]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule lines="4">
<x-card.normalrule>Each player adds up the remaining</x-card.normalrule>
<x-card.normalrule>health on his Monsters.</x-card.normalrule>
<x-card.normalrule>The player with the highest</x-card.normalrule>
<x-card.normalrule>shuffles his hand into his Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
