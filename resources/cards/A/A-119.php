<?php
// https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm

return new
#[\App\GeneralAttributes\Title('Healing Elixir')]

    #[\App\Concept('Item')]
    #[\App\Concept( 'Healing')]
    #[\App\CardAttributes\LocalHeroImage('A119.jpg')]

    #[\App\CardAttributes\ImageCredit('Image by freepik')]

    #[\App\CardAttributes\FlavorText('Does a monster good!')]

    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<x-card.phaserule type="Upkeep"  lines="3"><text >
<x-card.normalrule>Discard any number of cards from</x-card.normalrule>
<x-card.normalrule>your hand. For each card you discarded, </x-card.normalrule>
<x-card.normalrule>remove 5 damage from one Monster.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
