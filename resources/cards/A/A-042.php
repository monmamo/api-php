<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21)
return new
    #[Title('Copycat')]
    #[Concept('Draw')]
    #[Concept('Cost', 3)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.flavortext>Bears a striking resemblance to Frank Abagnale.</x-card.flavortext>

<x-card.phaserule type="Draw" >
<text >
<x-card.ruleline>Shuffle your hand into your Library.</x-card.ruleline>
<x-card.ruleline>Choose another player.</x-card.ruleline>
<x-card.ruleline>Count the number of cards in their hand.</x-card.ruleline>
<x-card.ruleline>Draw that many cards.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text>
</x-card.phaserule>
HTML;
        }
    };
