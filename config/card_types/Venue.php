<?php
return  new 
#[\App\GeneralAttributes\Title('Venue')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::PlaceColor)]
class('Venue') extends \App\CardType
{

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
