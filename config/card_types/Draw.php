<?php
return  new 
#[\App\GeneralAttributes\Title('Draw')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::GameActionColor)]
class('Draw') extends \App\CardType
{

    public static function standardRule(): \Traversable
    {
        yield 'Discard this card after playing.';
    }
};
