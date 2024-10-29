<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Personal Shopper')]

    #[Concept('Vendor')]
    #[Concept('Integrity', '1d4')]
    #[IsGeneratedImage]

    #[ImageCredit(null)]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
  <image class="hero" href="@local(hero/personal-shopper.jpg)" />

  <x-card.phaserule type="Draw"  height="170">
      <text >
<x-card.normalrule>Search your deck for 1-3 Item cards.</x-card.normalrule>
<x-card.normalrule>Show them to your opponent(s),</x-card.normalrule>
<x-card.normalrule>and put them into your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your deck afterward.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
