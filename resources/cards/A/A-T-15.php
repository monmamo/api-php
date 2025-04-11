<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Biolure')]
    #[Concept('Trait')]
    #[Concept('Lure')]
    #[Concept('Cost', 3)]
    #[Prerequisites(y: 400)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Command" lines="5">
      <text >
<x-card.normalrule>When not your turn,</x-card.normalrule>
<x-card.normalrule>roll 1d6 for each Monster</x-card.normalrule>
<x-card.normalrule>on the Battlefield until you get @dieroll(5) or @dieroll(6).</x-card.normalrule>
<x-card.normalrule>The selected Monster cannot attack</x-card.normalrule>
<x-card.normalrule>any other Monster on this turn.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
