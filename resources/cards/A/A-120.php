<?php
// https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm

return new
    #[\App\GeneralAttributes\Title('Healing Salve')]
    #[\App\Concept('Item')]
    #[\App\Concept( 'Healing')]
    #[\App\CardAttributes\LocalHeroImage('A120.jpg')]
    #[\App\CardAttributes\ImagePrompt('green jar of healing ointment')]
    #[\App\CardAttributes\ImageCredit('Image by freepik')]
    #[\App\CardAttributes\FlavorText('Does a monster good!')]
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<x-card.phaserule type="Upkeep" y="600" lines="1">
    <text>
        <x-card.normalrule>Attach this card to a Monster.</x-card.normalrule>
    </text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" lines="3">
    <text>
        <x-card.normalrule>If this Monster</x-card.normalrule>
        <x-card.normalrule>did not take any damage on this turn,</x-card.normalrule>
        <x-card.normalrule>remove 3d6 damage from it.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
}
};
