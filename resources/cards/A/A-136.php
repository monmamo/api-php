<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87)

return new
#[Title('Junk from the Trunk')]
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
<x-card.ruleline>Put an Item card from your</x-card.ruleline>
<x-card.ruleline>Discard into your Library.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>
</x-card.phaserule>

HTML;
    }
};
