<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Offensive Coordinator')]
    #[Concept('Bystander')]
    #[Concept('Coach')]
    #[Concept('Male')]
    #[Concept('Integrity', '1d6')]
    #[IsGeneratedImage]
    #[LocalHeroImage('A189.jpg')] // https://www.freepik.com/free-photo/football-trainer-teaching-his-pupils_32248887.htm
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<text y="480" filter="url(#solid)">
<x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You must already have a Head Coach on the Battlefield</x-card.smallrule>
<x-card.smallrule>to put this card on the Battlefield.</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female</x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>You may put the Attack cards you use</x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
</text>
HTML;
        }
    };
