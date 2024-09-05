<?php
return  new 
#[\App\GeneralAttributes\Title('Facility')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::PlaceColor)]
class('Facility') extends \App\CardType
{

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
