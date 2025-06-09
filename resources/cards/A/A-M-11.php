<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F4vvvGVlDFF.png?alt=media&token=6dddeb26-525f-4803-9565-1dc5086089cf
return new
    #[Title('Flametail')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 40)]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    #[ImagePrompt('fire monster of weird zoology with a flaming tail')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-11.jpeg</x-card.hero.local>

    <x-card.taxons>Pyros, TODO</x-card.taxons>

<x-card.phaserule type="Defense" >
<text>
<x-card.ruleline class="skilltitle">Fire Roar</x-card.ruleline>
<x-card.ruleline>Roll 1d6.</x-card.ruleline>
<x-card.ruleline>@dieroll(6,5) Attack has no effect.</x-card.ruleline>
<x-card.ruleline>@dieroll(4,3,2) Attack does only half its damage.</x-card.ruleline>
        </text>
</x-card.phaserule>

HTML;
        }
    };
