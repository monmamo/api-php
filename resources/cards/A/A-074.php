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
//#[IsGeneratedImage]
//#[\App\CardAttributes\ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // <image x="0" y="0" class="hero" href="@local(A246.jpeg)" />
        yield <<<'HTML'
    

    <text y="570" filter="url(#solid)">
<x-card.normalrule>Draw phase (every player): You may search</x-card.normalrule>
<x-card.normalrule>your Library for a Vendor card and play it</x-card.normalrule>
<x-card.normalrule>immediately. If you do so, return the card</x-card.normalrule>
<x-card.normalrule>to the Library and shuffle your Library.</x-card.normalrule>
<x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>

HTML;
    }
};
