<?php

// https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Healing Salve')]
    #[Concept('Item')]
    #[Concept('Healing')]
    #[Concept('Cost', 3)]
    #[ImagePrompt('green jar of healing ointment')]
    #[ImageCredit('Image by freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A120.png</x-card.hero.local>

<x-card.flavortext>Does a monster good!</x-card.flavortext>

    <x-card.phaserule type="Upkeep" y="590" >
    <text>
    <x-card.ruleline>Attach this card to a Monster. That</x-card.ruleline>
    <x-card.ruleline>Monster cannot attack on this turn.</x-card.ruleline>
    </text>
</x-card.phaserule>

    <x-card.phaserule type="Resolution" >
    <text>
        <x-card.ruleline>Restore Size @damage to this Monster.</x-card.ruleline>
    </text>
</x-card.phaserule>
HTML;
        }
    };
