<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Loose Balloons')]
    #[Concept('Environment')]
    #[ImageCredit('Icon by Lorc on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        /**
         * @implements \App\Contracts\Card\CardComponents::background
         */
        public function background(): \Traversable
        {
            yield <<<'HTML'
<x-linear-gradient-background start="#004000" end="#7c432f" />
<g transform="scale(1) translate(250,40)"><path d="M153.03 23.656c-7.817.13-15.85 1.054-24 2.875C28.356 49.033 26.89 199.884 165.563 248.595l-24.875 26.125 50.032 23.592 1.78-43.562c29.715 12.604 48.848 25.695 60.563 39 14.296 16.238 18.538 32.814 18.25 52.75-.043 2.955-.21 5.976-.47 9.063-41.823-7.816-76.908 9.98-93.156 36.343-9.494 15.405-12.62 34.01-6.5 51.188 6.12 17.177 21.345 32.088 45.344 40.937L223 466.5c-20.147-7.43-30.196-18.396-34.22-29.688-4.02-11.29-2.144-23.753 4.845-35.093 12.075-19.593 39.196-34.915 74.75-27.72-5.81 33.572-18.25 73.787-19.03 120.844h18.686c.84-42.738 12.676-80.404 18.626-115.375 41.503 15.78 78.795 8.483 102.906-11.626 17.17-14.32 27.544-35.056 28.532-57.28l17.844 30.936 26.375-35.563-40.22-14c93.154-102.85 24.31-230.453-69.906-205.25-95.71 25.604-114.367 160.712 46.97 213.657 2.425 20.61-5.843 40.045-21.563 53.156-18.773 15.656-48.37 22.47-85.063 8.25-1.106-.43-2.21-.826-3.31-1.22.438-4.627.714-9.23.78-13.78.333-23.017-5.476-45.547-22.906-65.344-14.603-16.585-36.784-31.238-69.375-44.78 104.097-113.053 43.227-214.435-44.69-212.97z" fill="#300000" fill-opacity="1" /></g>
HTML;
        }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule :>
<x-card.ruleline>For each Defense, roll 1d6.</x-card.ruleline>
<x-card.ruleline>If @dieroll(1), the Defense does nothing.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
