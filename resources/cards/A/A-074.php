<?php

// https://www.notion.so/monmamo/Shopping-Center-80a8d2a9d3764546a36f9bcea642fe4f?pvs=4#ee8b43f87ad949578920750b1fc2fe8b

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Shopping Center')]
#[Concept('Draw')]
// #[IsGeneratedImage]
// #[\App\CardAttributes\ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // <image x="0" y="0" class="hero" href="@local(A246.jpeg)" />
        yield <<<'HTML'
    

    <text y="570" filter="url(#solid)">
<x-card.ruleline>Draw phase (every player): You may search</x-card.ruleline>
<x-card.ruleline>your Library for a Vendor card and play it</x-card.ruleline>
<x-card.ruleline>immediately. If you do so, return the card</x-card.ruleline>
<x-card.ruleline>to the Library and shuffle your Library.</x-card.ruleline>
<x-card.ruleline>{{ __('rules.REDRAW') }}</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text>

HTML;
    }
};
