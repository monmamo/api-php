<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Sparking')]
    #[Concept('Trait')]
    #[Concept('Cost', 2)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    #[Prerequisites(lines: 'Requires Energos.', y: 360)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield '<x-card.hero.local>hero/A-T-02.jpg</x-card.hero.local>';

        yield <<<'HTML'
    <x-card.phaserule y="550" type="Command" ><text>
        <x-card.ruleline>You may discard any number of</x-card.ruleline>
        <x-card.ruleline>Electricity (A-003) from this Monster.</x-card.ruleline>
    </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" ><text>
        <x-card.ruleline>For each Electricity discarded,</x-card.ruleline>
        <x-card.ruleline>the attacking or defending Monster</x-card.ruleline>
        <x-card.ruleline>takes 1d4 @damage.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
