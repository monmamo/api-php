<?php

use App\CardAttributes\ConceptIconHeroImage;
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
    #[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
    #[ConceptIconHeroImage('Energos')]
    #[Prerequisites(lines: 'Requires Energos.', y: 360)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule y="500" type="Command" lines="2"><text>
        <x-card.normalrule>You may discard any number of</x-card.normalrule>
        <x-card.normalrule>Electricity (A-003) from this Monster.</x-card.normalrule>
    </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For each Electricity discarded,</x-card.normalrule>
        <x-card.normalrule>the attacking or defending Monster</x-card.normalrule>
        <x-card.normalrule>takes 1d4 @damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
