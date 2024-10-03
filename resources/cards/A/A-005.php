<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Community Center')]
    #[Concept('Facility')]
#[FlavorText('Have a hot meal. Hang out with the boys.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <svg x="402px" y="322px" height="128px" width="128px" viewBox="0 0 512 512">{{view('Mobster.ban-icon')}}</svg>

        <text y="500" filter="url(#solid)">
            <x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
        </text>
HTML;
    }
};
