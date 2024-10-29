<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21)
return new
#[Title('Copycat')]

    #[Concept('Draw')]

    #[LocalHeroImage('TODO.png')]
    #[ImageCredit(null)]

    #[FlavorText('Bears a striking resemblance to Frank Abagnale.')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
<text >
<x-card.normalrule>Shuffle your hand into your deck. </x-card.normalrule>
<x-card.normalrule>Choose another player.</x-card.normalrule>
<x-card.normalrule>Count the number of cards in their hand.</x-card.normalrule>
<x-card.normalrule>Draw that many cards.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
