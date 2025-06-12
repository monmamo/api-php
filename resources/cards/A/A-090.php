<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Five-Finger Discount')]
#[Concept('Draw')]
#[Concept('Criminal')]
#[ImageCredit('Adobe Stock #756008424')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.local>hero/AdobeStock_756008424.jpeg</x-card.hero.local>

    <x-card.cardrule  >
    <x-card.ruleline>Play a Vendor card.</x-card.ruleline>
<x-card.ruleline>You may ignore any requirement</x-card.ruleline>
<x-card.ruleline>to discard cards.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
