<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Community Center')]
    #[Concepts('Facility')]
#[FlavorText('Have a hot meal. Hang out with the boys.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <text y="500" filter="url(#solid)">
            <x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
        </text>
HTML;
    }
};
