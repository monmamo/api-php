<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Biolure')]
    #[Concept('Trait')]
    #[Concept('Lure')]
    #[Concept('Cost', 3)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Command" >
      <text >
<x-card.ruleline>When not your turn,</x-card.ruleline>
<x-card.ruleline>roll 1d6 for each Monster</x-card.ruleline>
<x-card.ruleline>on the Battlefield until you get @dieroll(5) or @dieroll(6).</x-card.ruleline>
<x-card.ruleline>The selected Monster cannot attack</x-card.ruleline>
<x-card.ruleline>any other Monster on this turn.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
        }
    };
