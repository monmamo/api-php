<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
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
    #[LocalHeroImage('hero/personal-assistant.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<text y="500" filter="url(#solid)">
    <x-card.smallrule>A player may have any number of Personal Assistants on the</x-card.smallrule>
        <x-card.smallrule>Battlefield. You may choose to make this card Male or Female</x-card.smallrule>
        <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
    </text>

    <x-card.phaserule type="Draw" lines="2" badge="Repeat">
        <text>
        <x-card.normalrule>Search your Library for any card.</x-card.normalrule>
        <x-card.normalrule>Shuffle your Library afterwards.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
