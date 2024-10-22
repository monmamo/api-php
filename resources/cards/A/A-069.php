<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Insurance')]
    #[ImageCredit('Image by USER_NAME on SERVICE')]
    #[LocalHeroImage('TODO.png')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule height="245" >
<x-card.smallrule>Put this card on the Battlefield before</x-card.smallrule>
<x-card.smallrule>a Catastrophe card is played.</x-card.smallrule>
<x-card.normalrule>When a Catastrophe card is played,</x-card.normalrule>
<x-card.normalrule>you may shuffle all or part of your</x-card.normalrule>
<x-card.normalrule>Discard into your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
