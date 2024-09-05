<?php
return  new
    #[\App\GeneralAttributes\Title('Make It Rain')]
    #[\App\CardAttributes\CardType("Draw")]
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
