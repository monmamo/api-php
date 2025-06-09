<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Red')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 35)]
    #[Concept('DamageCapacity', 14)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 7)]
    #[ImagePrompt('red panda of weird zoology shooting fire from its mouth')]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-10.jpeg</x-card.hero.local>

    <x-card.taxons>Pyros, Aracunos</x-card.taxons>

<x-card.phaserule type="Upkeep" >
    <text>
<x-card.ruleline class="skilltitle">Flaming Tail</x-card.ruleline>
<x-card.ruleline>Once per turn, you may search your</x-card.ruleline>
<x-card.ruleline>Library or Discard for a Fire (A-002)</x-card.ruleline>
<x-card.ruleline>and attach it to this Monster.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
