<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Grumpus')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Level', 41)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '3')]
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    #[ImageInDevelopment]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-20.jpeg</x-card.hero.local>

    <x-card.taxons>Hominos, Gouros</x-card.taxons>

<x-card.phaserule type="Trait" height="170">
    <text>
<x-card.skilltitle>Needs a Friend</x-card.skilltitle>
<x-card.normalrule>Increase Speed by 1 for</x-card.normalrule>
<x-card.normalrule>each Bystander on your team.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
