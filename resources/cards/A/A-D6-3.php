<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Force Roll 3')]
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero-svg><g fill="#ffffff" fill-opacity="1">
        <path d="M74.5 36A38.5 38.5 0 0 0 36 74.5v363A38.5 38.5 0 0 0 74.5 476h363a38.5 38.5 0 0 0 38.5-38.5v-363A38.5 38.5 0 0 0 437.5 36h-363zm316.97 36.03A50 50 0 0 1 440 122a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97zM256 206a50 50 0 0 1 0 100 50 50 0 0 1 0-100zM123.47 340.03A50 50 0 0 1 172 390a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97z"></path>
    </g></x-card.hero-svg>


        <x-slot:small>
            You may apply this to any 1d6 roll, be it your own or another player's.
            Discard this card after using.
        </x-slot:small>
        <text>One 1d6 roll counts as @dieroll(3).</text>
HTML;
    }
};
