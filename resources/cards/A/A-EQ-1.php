<?php

// https://thenounproject.com/browse/icons/term/equals/ _original_width:847 _original_height:1058.75

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Equalizer 1')]
#[Concept('Draw')]
#[ImageCredit('Image by amantaka from Noun Project')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g transform="translate(100 75) scale(0.531 0.425)" ><path d="M9 756l0 -262 828 0 0 262 -828 0zm0 -403l0 -263 828 0 0 263 -828 0z" fill="#ffffff" fill-opacity="50%"/></g><text x="50%" y="360" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >1</text>

<text>
<x-card.normalrule>All players shuffle their hand into</x-card.normalrule>
<x-card.normalrule>their deck and draw up to 4 cards.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>
HTML;
    }
};
