
<?php
// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recycle')]
#[Concept('Draw')]
#[Concept('Cost', 3)]
#[ImageCredit('Image by logturnal on Freepik')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A212.jpg</x-card.hero.local>

<x-card.flavortext>Recycle today for a better upkeep phase tomorrow.</x-card.flavortext>

<x-card.cardrule >
<x-card.ruleline>Put a card from your Discard</x-card.ruleline>
<x-card.ruleline>pile into your hand.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
