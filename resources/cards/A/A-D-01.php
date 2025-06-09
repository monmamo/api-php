<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/jiu-jitsu-athletes-fighting_10369936.htm

return new
    #[Title('Body Block')]
    #[Concept('Defense')]
    #[Concept('Physical')]
    #[Concept('Level', 15)]
    #[ImageCredit('Image by Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>AS02.jpg</x-card.hero.local> 

    <x-card.phaserule type="Resolution" >
    <text >
        <x-card.ruleline>Prevent Size+Boost @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
