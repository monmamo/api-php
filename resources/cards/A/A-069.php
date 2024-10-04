<?php

return new
#[\App\GeneralAttributes\Title('Insurance')]

    'concepts' => [],



    #[\App\CardAttributes\ImageCredit('Image by USER_NAME on SERVICE')]



    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('TODO.png')]
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
