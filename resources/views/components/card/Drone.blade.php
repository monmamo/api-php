<?php

return  new
#[\App\GeneralAttributes\Title('Drone')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::ItemColor)]
class ('Drone') extends \App\CardType
{
    public function standardRule(): \Traversable
    {
        yield 'While on the Battlefield, counts as a Flying Monster.';
        yield 'Cannot attack. Can use Dodge.';
    }

 };
