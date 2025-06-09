<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Personal Shopper')]
    #[Concept('Vendor')]
    #[Concept('Integrity', '1d4')]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
  <image class="hero" href="@local(hero/personal-shopper.jpg)" />

  <x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Search your deck for 1-3 Item cards.</x-card.ruleline>
<x-card.ruleline>Show them to your opponent(s),</x-card.ruleline>
<x-card.ruleline>and put them into your hand.</x-card.ruleline>
<x-card.ruleline>Shuffle your deck afterward.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
