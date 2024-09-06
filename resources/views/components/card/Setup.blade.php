<?php
return  new

#[\App\GeneralAttributes\Title('Setup')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::GameActionColor)]

class('Setup')  extends \App\CardType
{
    public function standardRule(): \Traversable
    {
        yield 'Can be played only during the Setup phase.';
    }
};
