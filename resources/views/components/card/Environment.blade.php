<?php
return  new
#[\App\GeneralAttributes\Title('Environment')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::EnvironmentColor)]
class('Environment')  extends \App\CardType
{
    use \App\Concerns\ForCardType\Formatting;


    public function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }
};
