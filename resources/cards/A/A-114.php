<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// prompt: woman of weird zoology in professional dress at a desk using a computer and a mobile phone

return new
    #[Title('Personal Assistant')]
    #[Concept('Bystander')]
    #[Concept('Cumulative')]
    #[Concept('Integrity', 2)]
    #[Concept('DamageCapacity', 10)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 3)]
    #[ImageCredit('Image by freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/personal-assistant.jpg</x-card.hero.local>

    <text y="540" filter="url(#solid)">
    <x-card.ruleline class="smallrule">A player may have any number of Personal Assistants on the</x-card.ruleline>
        <x-card.ruleline class="smallrule">Battlefield. You may choose to make this card Male or Female</x-card.ruleline>
        <x-card.ruleline class="smallrule">when you put it on the Battlefield.</x-card.ruleline>
    </text>

    <x-card.phaserule type="Draw" >
        <text>
        <x-card.ruleline>Search your Library for any card.</x-card.ruleline>
        <x-card.ruleline>Shuffle your Library afterwards.</x-card.ruleline>
        <x-card.ruleline>Gives 1 additional Draw action.</x-card.ruleline>
    </text>
</x-card.phaserule>
HTML;
        }
    };
