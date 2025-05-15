<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Kitpony')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Level', 48)]
    #[Concept('Size', 7)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', 4)]
    #[IsGeneratedImage]
#[ImageIsPrototype]
#[ImageInDevelopment()]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/felequos.png</x-card.hero.local>

    <x-card.taxons>Felequos</x-card.taxons>
HTML;
    }
};
