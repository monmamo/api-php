<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Breeder')]

    #[Concepts('Vendor', 'Integrity:1d4')]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
        <x-card.phaserule type="Draw" lines="2">
                <text >
    <x-card.normalrule>Search your Library for a Monster card.</x-card.normalrule>
    <x-card.normalrule>Put that card in your hand.</x-card.normalrule>
</text></x-card.phaserule>

HTML;
        }
    };
