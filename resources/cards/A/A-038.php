<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Body Block')]

    #[Concept('Defense')]
#[Concept('Physical')]

#[LocalHeroImage('AS02.jpg')] // https://www.freepik.com/free-vector/jiu-jitsu-athletes-fighting_10369936.htm

    #[ImageCredit('Image by Freepik')]



    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="1">
    <text >
        <x-card.normalrule>Prevent Size÷2 damage (rounded up).</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
