<?php
return  new
#[\App\GeneralAttributes\Title('Skill')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::TraitColor)]

class ('Skill') extends \App\CardType
{

 
    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
