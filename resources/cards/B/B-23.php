<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mob Lockdown')]
#[Concept('Catastrophe')]

#[LocalHeroImage('TODO.png')]

class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="220" >
<x-card.normalrule>Discard all Bystander cards.</x-card.normalrule>
<x-card.normalrule>No more Bystander cards can be played</x-card.normalrule>
<x-card.normalrule>The Place cannot be changed.</x-card.normalrule>
<x-card.normalrule>No more Vendor cards can be played.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
