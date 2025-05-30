<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('League Victory')]
    #[ImageCredit('Icon by Lorc on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        /**
         * @group nonary
         */
        public function background(): \Traversable
        {
            yield <<<'HTML'
<defs>
    <linearGradient x1="0" x2="1" y1="1" y2="0" id="gradient">
    <stop offset="0%" stop-color="#4050b5" stop-opacity="1"></stop>
    <stop offset="100%" stop-color="#0094b5" stop-opacity="1"></stop>
</linearGradient>

<pattern id="pattern" width="20" height="20" patternTransform="scale(2)" patternUnits="userSpaceOnUse"><path fill="none" stroke="#2072b5" stroke-linecap="square" d="M3.25 10h13.5M10 3.25v13.5"/></pattern>

</defs>

<x-card.background fill="url(#gradient)" />
<x-card.background fill="url(#pattern)" />
HTML;
        }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.flavortext>Every champion starts at 0-0.</x-card.flavortext>

<x-card.hero.svg ><g fill="#ffffff">{{ view('Movement.icon') }}</g></x-card.hero.svg >

<x-card.cardrule lines="3">
<x-card.normalrule>Roll 1d6 for each Monster on your team.</x-card.normalrule>
<x-card.normalrule>Move FORWARD that many spaces.</x-card.normalrule>
</x-card.cardrule>


HTML;
        }
    };
