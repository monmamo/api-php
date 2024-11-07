<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Waste Manager')]
    #[Concept('Mobster')]
    #[Concept('Integrity', '4')]
    #[ImageCredit('Icon by nangicon from Noun Project')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-svg height="450" width="450" x="80"  viewBox="-5.0 -10.0 110.0 135.0">
 <path d="m4.8594 53.66c0 0.85156-0.69141 1.55-1.55 1.55s-1.55-0.69141-1.55-1.55c0-11.91 4.55-23.199 12.8-31.781 7.7227-8.0 17.914-12.879 28.9-13.859l-5.89-4.7812c-0.66-0.539-0.76172-1.5117-0.23-2.1719s1.5117-0.76172 2.1719-0.23l9.0391 7.3398c0.32 0.26172 0.51953 0.62891 0.55859 1.0391 0 0.41-0 0.82-0.33984 1.1289l-7.3398 9.0391c-0.3 0.37891-0.75 0.57-1.1992 0.57-0.33984 0-0.69141-0.1-0.96875-0.35156-0.66-0.539-0.76172-1.5117-0.23-2.1719l5.1914-6.39c-22.199 1.73-39.371 20.141-39.371 42.621zm64.1 37.012c-19.551 11.289-44.1 5.57-56.672-12.922l8.3 1.05c0.85156 0.1 1.6211-0.48828 1.73-1.3398 0.1-0.85156-0.48828-1.6211-1.3398-1.73l-11.547-1.46c-0.41-0-0.82 0-1.14 0.3-0.32 0.25-0.53125 0.621-0.58984 1.0312l-1.4727 11.551c-0.1 0.85156 0.48828 1.6211 1.3398 1.73 0 0 0.12891 0 0.19922 0 0.76953 0 1.4297-0.57 1.5312-1.3516l0.92969-7.3398c6.3 8.91 15.531 15.23 26.219 17.898 3.6992 0.92969 7.46 1.39 11.191 1.39 7.9492 0 15.8-2.0781 22.852-6.1484 0.73828-0.42969 0.98828-1.3711 0.57-2.1-0.42187-0.74219-1.3711-1.0-2.1-0.57zm29.148-19.973c-0.32812-0.789-1.2383-1.16-2.0195-0.82812l-6.8281 2.8594c4.5586-9.9219 5.4219-21.07 2.3984-31.66-3.2812-11.5-10.789-21.121-21.148-27.1-0.73828-0.42969-1.6797-0.17188-2.1 0.57-0.42969 0.73828-0.17188 1.6797 0.57 2.1 19.551 11.289 26.871 35.398 17.141 55.531l-3.2383-7.7188c-0.32812-0.789-1.2383-1.16-2.0195-0.82813-0.789 0.32813-1.16 1.2383-0.82812 2.0195l4.5117 10.738c0.25 0.58984 0.82 0.94922 1.4297 0.94922 0.19922 0 0.39844-0 0.6-0.121l10.738-4.5117c0.76172-0.3 1.1328-1.2188 0.80-2.0zm-24.25-35.84v4.3398c0 1.5312-1.2383 2.7695-2.7695 2.7695h-1.7695l-2.7891 35.84c-0.19922 2.6211-2.4219 4.66-5.0391 4.66h-27.793c-2.6211 0-4.8281-2.05-5.0391-4.66l-2.7812-35.84h-1.7695c-1.5312 0-2.7695-1.2383-2.7695-2.7695v-4.3398c0-1.5312 1.2383-2.7695 2.7695-2.7695h11.238v-0.33984c0-3.80 3.0898-6.8984 6.89-6.8984h10.711c3.80 0 6.8984 3.1 6.8984 6.8984v0.33984h11.238c1.5234 0 2.7734 1.2383 2.7734 2.7695zm-35.418-2.7695h18.32v-0.33984c0-2.1-1.71-3.8-3.8-3.8h-10.715c-2.1 0-3.80 1.71-3.80 3.8zm27.777 9.8789h-37.238l2.7617 35.6c0 1.0312 0.92187 1.8 1.96 1.8h27.8c1.0312 0 1.8789-0.78125 1.96-1.8zm4.543-6.7891h-46.332v3.6914h46.328zm-38.043 26.648v-2.30c0-0.96875 0.621-1.82 1.5312-2.1211l1.2695-0.41c0.23-0.78125 0.55-1.5312 0.94141-2.2617l-0.6-1.1992c-0.44922-0.85156-0.28125-1.8984 0.42188-2.5781l1.6211-1.6211c0.67969-0.69141 1.7188-0.85938 2.5898-0.41l1.1914 0.6c0.71875-0.37891 1.4688-0.69922 2.2617-0.94141l0.41-1.2617c0.289-0.92969 1.14-1.55 2.1-1.55h2.30c0.96 0 1.82 0.621 2.1211 1.5391l0.41 1.2695c0.78125 0.23828 1.5312 0.55 2.2617 0.94141l1.1914-0.6c0.85937-0.44141 1.8984-0.26953 2.5781 0.41l1.6211 1.6211c0.69922 0.69141 0.85938 1.73 0.41 2.5898l-0.6 1.1797c0.39 0.71875 0.69922 1.48 0.94141 2.2617l1.2695 0.41c0.92187 0.30 1.5391 1.1484 1.5391 2.1211v2.30c0 0.96875-0.621 1.82-1.5391 2.1211l-1.2695 0.41c-0.23828 0.76953-0.55 1.5312-0.94141 2.2617l0.6 1.1914c0.44141 0.85156 0.28125 1.89-0.41 2.5781l-1.6211 1.6211c-0.67969 0.67969-1.7188 0.85156-2.5781 0.41l-1.1914-0.6c-0.73 0.39-1.4883 0.69922-2.2617 0.94141l-0.41 1.2695c-0.30 0.92188-1.1484 1.5391-2.1211 1.5391h-2.30c-0.96875 0-1.82-0.621-2.1-1.55l-0.41-1.2617c-0.78125-0.23828-1.5391-0.55-2.2617-0.94141l-1.1914 0.6c-0.871 0.44141-1.91 0.28125-2.5898-0.41l-1.6211-1.6211c-0.69141-0.69141-0.85156-1.7383-0.41-2.6l0.6-1.1797c-0.39-0.73-0.69922-1.4883-0.92969-2.2617l-1.2695-0.41c-0.94531-0.289-1.5547-1.14-1.5547-2.1zm3.0898-0.62891 1.1 0.35938c0 0 0 0 0 0 0.71875 0.23828 1.2617 0.82 1.4492 1.5391 0.21 0.82 0.539 1.6211 0.98 2.3711 0.39 0.64844 0.41 1.4492 0 2.1289l-0.53125 1.0391 0.73828 0.73828 1.0391-0.53125c0.67188-0.33984 1.4688-0.32 2.1289 0 0.75 0.44141 1.55 0.76953 2.3711 0.98 0.73828 0.19141 1.32 0.73828 1.55 1.4688l0.35938 1.1h1.0391l0.35938-1.1c0-0 0-0 0-0 0.23828-0.71 0.8-1.25 1.5312-1.4414 0.82-0.21875 1.6211-0.55 2.3789-0.98 0.66-0.39 1.46-0.41 2.1289-0l1.0391 0.53125 0.73-0.73-0.53125-1.05c-0.33984-0.69141-0.32-1.48 0-2.1289 0.44141-0.76172 0.76953-1.5586 0.98-2.3711 0.19141-0.73 0.71875-1.30 1.4414-1.5391 0 0 0-0 0-0l1.1-0.35938v-1.0391l-1.1-0.35938c-0.71875-0.23-1.2695-0.8-1.46-1.55-0.21875-0.82-0.55-1.6211-0.98-2.3711-0.37891-0.66-0.41-1.4219-0-2.1 0-0 0-0 0-0l0.53125-1.0391-0.73-0.73828-1.0391 0.53125c-0.67969 0.35156-1.48 0.32812-2.14-0-0.73828-0.42969-1.5391-0.76172-2.3594-0.98h-0c-0.71875-0.19141-1.2891-0.73-1.5312-1.4414 0-0-0-0-0-0l-0.35937-1.1h-1.0391l-0.36719 1.1c-0.23 0.71-0.8 1.2617-1.55 1.46-0.82812 0.21875-1.6211 0.55-2.3594 0.98-0.67188 0.39-1.46 0.41-2.14 0l-1.0391-0.53125-0.73828 0.73828 0.53125 1.0391c0.33984 0.67188 0.32 1.4688-0 2.1289-0.44141 0.75-0.76953 1.5391-0.98 2.3594-0.19922 0.75-0.75 1.3281-1.48 1.5586l-1.1 0.35938-0 1.0469zm5.07-0.52734c0-3.71 3.0117-6.7188 6.7188-6.7188 3.71 0 6.7188 3.0117 6.7188 6.7188 0 3.71-3.0195 6.7188-6.7188 6.7188-3.7 0-6.7188-3.0117-6.7188-6.7188zm3.0898 0c0 2 1.6289 3.6289 3.6289 3.6289s3.6289-1.6289 3.6289-3.6289-1.6289-3.6289-3.6289-3.6289c-1.9961 0.0-3.6289 1.6289-3.6289 3.6289z" fill="#ffffff" fill-opacity="1"/>
</x-svg>
<x-card.cardrule height="135" >
<x-card.normalrule>This player does not have his own</x-card.normalrule>
<x-card.normalrule>discard pile. Put existing & henceforth</x-card.normalrule>
<x-card.normalrule>discards at the bottom of your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
