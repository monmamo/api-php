<?php

// https://thenounproject.com/browse/icons/term/equals/ _original_width:847 _original_height:1058.75

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Equalizer 2')]
#[Concepts('Draw')]
#[ImageCredit('Image by amantaka from Noun Project')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g transform="translate(100 75) scale(0.531 0.425)" ><path d="M9 756l0 -262 828 0 0 262 -828 0zm0 -403l0 -263 828 0 0 263 -828 0z" fill="#ffffff" fill-opacity="50%"/></g><text x="50%" y="360" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >2</text>

<text>
<x-card.normalrule>Each player either draws or discards</x-card.normalrule>
<x-card.normalrule>until he or she has 5 cards</x-card.normalrule>
<x-card.normalrule>in his or her hand.</x-card.normalrule>
(Your opponent does this first.)
        </text>
HTML;
    }
};
