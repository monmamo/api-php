<?php

// https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Healing Salve')]
    #[Concept('Item')]
    #[Concept('Healing')]
    #[LocalHeroImage('A120.png')]
    #[ImagePrompt('green jar of healing ointment')]
    #[ImageCredit('Image by freepik')]
    #[FlavorText('Does a monster good!')]
    #[Prerequisites('Attach this card to a Monster.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="3">
    <text>
        <x-card.normalrule>If this Monster did not</x-card.normalrule>
        <x-card.normalrule>take any damage on this turn,</x-card.normalrule>
        <x-card.normalrule>remove 3d6 damage from it.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
