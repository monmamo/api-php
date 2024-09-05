<?php

return  new
    #[\App\GeneralAttributes\Title('Acid')]
    #[\App\CardAttributes\CardType("Mana")]
    #[\App\CardAttributes\ImageCredit("Game-Icons.net")]
    class extends \App\Card implements \App\Contracts\Card\FullsizeImage, \App\Contracts\Card\SvgImage {


        /**
         * @group nonary
         */
        public function bodyText(): \Traversable
        {
            return new \EmptyIterator;
        }

        /**
         * @group nonary
         */
        public function flavorText(): \Traversable
        {
            yield "Corrosive substance that can dissolve materials.";
            yield "It is often used in manufacturing and cleaning.";
        }

        /**
         * @group nonary
         */
        public function image():string
        {
            return <<<SVG
<g transform="scale(2.05) translate(0,15)">
    <path d="M256.875 16A30 30 0 0 0 226 46a30 30 0 0 0 60 0 30 30 0 0 0-29.125-30zm-45 75A30 30 0 0 0 181 121a30 30 0 0 0 60 0 30 30 0 0 0-29.125-30zm74.563 30A15 15 0 0 0 271 136a15 15 0 0 0 30 0 15 15 0 0 0-14.563-15zm-30 45A15 15 0 0 0 241 181a15 15 0 0 0 30 0 15 15 0 0 0-14.563-15zM196 196c-45 0-15 30 0 45 0 150-120 225-120 255h360c0-30-120-105-120-255 15-15 45-45 0-45-15 0-30 15-60 15s-45-15-60-15z" fill="#488000" fill-opacity="1" stroke-width="5"></path>
</g>
SVG;
        }
    };
