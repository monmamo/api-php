<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Junk Patrol')]
#[Concept('Vendor')]
#[Concept('Integrity', 1)]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" >
<text>
<x-card.ruleline>Put up to 3 Item cards from your</x-card.ruleline>
<x-card.ruleline>Discard into your Library.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text>
</x-card.phaserule>
HTML;
    }
};
