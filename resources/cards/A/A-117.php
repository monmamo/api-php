<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Convenience Store')]
#[Concept('Vendor')]
#[Concept('Integrity', 4)]
// #[ImageCredit('IMAGE_CREDIT')]
#[FlavorText(lines: ['The quick stop for everything you forgot', 'at the Big-Box Store (A-014).'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw"  badge="Repeat">
    <text>
        <x-card.ruleline>Discard 1d4 cards from your hand.</x-card.ruleline>
        <x-card.ruleline>Search your Library for one Item</x-card.ruleline>
        <x-card.ruleline>card. Reveal it, then put it in your hand.</x-card.ruleline>
        <x-card.ruleline>{{__('rules.SHUFFLE')}}</x-card.ruleline>
        <x-card.ruleline>{{__('rules.REDRAW')}}</x-card.ruleline>
        <x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
        </text>
</x-card.phaserule>
HTML;
    }
};

//     <image x="0" y="0" class="hero" href="@local(A040.png)" />
