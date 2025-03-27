<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[ImageCredit('Donut icon by Delapouite on Game-Icons.net under CC BY 3.0')]
    #[Title('Baker\'s Dozen')]
    #[Concept('Draw')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<symbol id="donut" width="512" height="412" viewBox="0 50 512 412" ><path d="M256 92.3c-53.2 0-102.8 14.8-142.2 37.4l14.2 22.4-15.2 9.6-14.23-22.5c-2.17 1.4-4.3 2.9-6.39 4.4-38.75 27.9-63.12 63.7-66.7 97.2 2.98 6.7 8.12 17.5 14.74 28.8 10.73 18.3 26.22 36.6 37.19 39.8 17.92-2.5 33.99-22.1 50.29-19.3 25.1 5.1 38.1 28.4 50.3 48 9.3 14.5 21.1 34.7 38.1 36.5 6.2.7 11.6-1.2 17.7-5.2 6.1-4.1 12.5-10.4 19.2-17.3 13.2-13.7 27.7-30.9 49.5-33.6 15.3-2 27.6 6.2 38.1 12.4 10.4 6.1 18.7 10.2 25.5 8.6h.1c11.1-5.4 16.8-14.8 22.1-23.2l-35.6-25.4 10.4-14.6 35.9 25.6c5.1-5.5 11.4-10 19.7-11.8 11.5-2.5 20.4 3.8 27.1 8 6.6 4.2 11.2 6.3 13.8 5.8 3.1-.6 11.8-7 18.1-13.8 2-2.2 3.9-4.4 5.4-6.3 2.6-10.9 3.9-22.4 3.9-34.5 0-1.5-.1-3-.1-4.4l-37.6 18.7-8-16.2 42.4-21.2c-8-29-30.7-58.7-63.9-82.6-42-30.3-100.3-51.3-163.8-51.3zm69.1 14.2l6 17-50.3 18.1-6-17zm-140.2 11l33.4 9.6-5 17.2-33.4-9.5zm184.4 23l39.7 27.6-10.2 14.8-39.7-27.6zm-47.6 12.8l10.8 14.4-33 24.5-10.8-14.4zm-157 34l2.6 17.8-45.6 6.9-2.6-17.8zm91.3 3.6c17.8 0 34 3.2 46.5 9.1 12.5 5.8 22.9 15 22.9 28s-10.4 22.2-22.9 28c-12.5 5.9-28.7 9.1-46.5 9.1s-34-3.2-46.5-9.1c-12.5-5.8-22.9-15-22.9-28s10.4-22.2 22.9-28c12.5-5.9 28.7-9.1 46.5-9.1zm146.2 5.6l4.6 17.4-47.2 12.2-4.6-17.4zM256 208.9c-15.6 0-29.6 3-38.9 7.4-9.4 4.3-12.5 9.2-12.5 11.7s3.1 7.4 12.5 11.7c9.3 4.4 23.3 7.4 38.9 7.4 15.6 0 29.6-3 38.9-7.4 9.4-4.3 12.5-9.2 12.5-11.7s-3.1-7.4-12.5-11.7c-9.3-4.4-23.3-7.4-38.9-7.4zm-194.44 18l39.74 15.4-6.5 16.8-39.74-15.4zm-32 59.9c9.06 35.6 31.19 64.7 62.55 86.9 41.69 29.4 99.99 46 163.89 46 63.9 0 122.2-16.6 163.9-46 21.1-14.9 38.1-33 49.6-54.2-2 .9-4.1 1.6-6.3 2-11.5 2.4-20.4-4-27-8.2-6.7-4.1-11.2-6.2-13.7-5.6-7.2 1.6-13.4 9.7-20.6 20.8-7.3 11-15.6 25-31.8 28.6-15.2 3.4-28-4.4-38.7-10.7-10.6-6.3-19.5-11-26.6-10.1-16.8 5-29.2 18.3-38.9 28.3-6.8 7.1-13.8 14.3-22.1 19.8s-18.3 9.2-29.5 8.2c-26.8-4.9-39.2-24.9-51.6-45-12.3-19.7-23.5-36.8-38.6-39.9-18.7 3-31.62 24.4-51.74 18.9-18.43-5.4-32.01-22.5-42.8-39.8zm223.64 2.8l2.6 17.8-50.4 7.4-2.6-17.8z"></path></symbol>
HTML;

            $donut_width = \config('card-design.hero.width') / 4;
            $donut_height = $donut_width * 412 / 512;
            $donut_x = 0;
            $donut_y = 0;

            foreach (\range(0, 2) as $dy) {
                foreach (\range(0, 3) as $dx) {
                    yield \App\Strings\html(
                        'use',
                        [
                            'href' => '#donut',
                            'x' => $donut_x + $dx * $donut_width,
                            'y' => $donut_y + $dy * $donut_height,
                            'width' => $donut_width,
                            'height' => $donut_height,
                            'fill' => '#fff',
                            'fill-opacity' => '1',
                        ],
                    );
                }
            }

            yield \App\Strings\html(
                'use',
                [
                    'href' => '#donut',
                    'x' => (\config('card-design.hero.width') - $donut_width) / 2,
                    'y' => $donut_y + 3 * $donut_height,
                    'width' => $donut_width,
                    'height' => $donut_height,
                    'fill' => '#fff',
                    'fill-opacity' => '1',
                ],
            );

            yield <<<'HTML'
        <x-card.phaserule type="Draw" lines="5"><text>
            <x-card.normalrule>Look at the top 13 cards of your</x-card.normalrule>
            <x-card.normalrule>Library. You may put 3 of them into</x-card.normalrule>
            <x-card.normalrule>your hand. Put the rest on the bottom</x-card.normalrule>
            <x-card.normalrule>of your Library in any order.</x-card.normalrule>
            <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
            </text></x-card.phaserule>
HTML;
        }
    };
