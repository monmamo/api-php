<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[FlavorText(lines: 'The wall of silence is blue.', y: 450)]
    #[IsGeneratedImage]
    #[\App\CardAttributes\ImageIsPrototype]
    #[Concept('Mobster')]
    #[Concept('Integrity', '1d4')]
    #[Concept('DamageCapacity', 14)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Title('Crooked Cop')]
    #[LocalHeroImage('A-045.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" lines="6">
      <text >
<x-card.normalrule>Choose an opponent. Choose a</x-card.normalrule>
<x-card.normalrule>random card from that opponent's</x-card.normalrule>
<x-card.normalrule>hand. They must discard that card. Reveal</x-card.normalrule>
<x-card.normalrule>cards from the top of your Library until an</x-card.normalrule>
<x-card.normalrule>Item card appears. Put that card in your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle the other cards back into your Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
