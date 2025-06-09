<?php

// inspiration: Fieldworker PTCG card https://bulbapedia.bulbagarden.net/wiki/Fieldworker_(EX_Legend_Maker_73)

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Fieldworker')]
    #[Concept('Bystander')]
    #[Concept('Male')]
    #[Concept('Cumulative')]
    #[Concept('Integrity', '1')]
    #[Concept('DamageCapacity', 11)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 3)]
     #[ImageCredit('Image by Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/fieldworker.jpg</x-card.hero.local>

<x-card.cardrule>
    <x-card.ruleline class="smallrule">A player may have any number of Fieldworkers on the Battlefield.</x-card.ruleline>
    </x-card.cardrule>

<x-card.phaserule type="Draw" >
    <text >
        <x-card.ruleline>Draw up to 2 cards for each</x-card.ruleline>
        <x-card.ruleline>of your Fieldworkers.</x-card.ruleline>
        <x-card.ruleline>Then you may Redraw.</x-card.ruleline>
 </text>
</x-card.phaserule>
HTML;
        }
    };
