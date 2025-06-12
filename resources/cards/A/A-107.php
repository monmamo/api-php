<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Product Recall')]
#[Concept('Draw')]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" >
<text>
<x-card.ruleline>Choose one of your opponents.</x-card.ruleline>
<x-card.ruleline>That opponent reveals his or her hand</x-card.ruleline>
<x-card.ruleline>&amp; shuffles all Item cards found there into</x-card.ruleline>
<x-card.ruleline>his or her Library. Then, draw a number of</x-card.ruleline>
<x-card.ruleline>cards equal to the number of Item cards your</x-card.ruleline>
<x-card.ruleline>opponent shuffled into his or her Library.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
