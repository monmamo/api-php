<?php
return  new
    #[\App\GeneralAttributes\Title('Make It Rain')]
    #[\App\CardAttributes\CardType(\App\CardTypes\DrawType::class)]
    class extends \App\Card {


        public function bodyText(): \Traversable
        {
            yield "Every player may draw up to 5 cards.";
        }
        public function flavorText(): \Traversable
        {
            return new \EmptyIterator;
        }
    };
