<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Gaze')]
#[Concept('TODO')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

// {{ view('Skill.background') }}
//     <x-card.image-credit>Image by Lorc on Game-Icons.net under CC BY 3.0</x-card.image-credit>

// <g  class="svg-hero">
//         <path d="M230.844 47.688c-28.215.083-58.57 2.925-91 8.78C339.666 41.874 441.95 144.504 495.938 292.75c0-143.316-92.67-245.57-265.094-245.063zm-2.656 33.624c-56.703 22.374-97.407 81.194-97.407 150.844 0 49.006 20.153 92.64 51.845 122 22.64 8.588 46.563 10.904 71.406 9.563-26.212-96.096-8.522-185.37 32.5-271-18.534-6.51-37.96-10.382-58.342-11.407zm-41.844 1.782c-43.318 5.686-90.65 23.297-142.5 54.53 24.987 97.103 56.545 155.038 92.78 187.97-15.558-27.26-24.53-59.27-24.53-93.438 0-61.93 29.422-116.84 74.25-149.062zm134.156 25c1.552 6.27 2.92 12.552 4.156 18.844-1.776-.353-3.62-.532-5.5-.532-15.486 0-28.03 12.55-28.03 28.03 0 15.483 12.544 28.033 28.03 28.033 4.33 0 8.432-.967 12.094-2.72 3.26 62.225-9.635 123.823-41.03 179.844 32.597-5.38 66.42-14.65 100.78-22.406 22.463-28.085 36.094-64.734 36.094-105.032 0-8.02-.553-15.9-1.594-23.594-31.27-44.417-66.02-78.693-105-100.468zm-301.875 48.47C36.78 459.957 249.36 479.842 493.063 343.717 306.578 348.125 115.88 532.286 18.625 156.56zm427 82.75c-1.25 33.993-11.342 65.633-27.938 92.28 23.992-4.595 48.14-7.793 72.22-7.813-13.924-30.585-28.636-58.848-44.282-84.467zm41.53 129.81c-127.06 79.076-267.344 111.63-421.03 39.126 130.246 115.856 342.11 82.373 421.03-39.125z" transform="translate(-256, 0)"></path>
//         <path d="M230.844 47.688c-28.215.083-58.57 2.925-91 8.78C339.666 41.874 441.95 144.504 495.938 292.75c0-143.316-92.67-245.57-265.094-245.063zm-2.656 33.624c-56.703 22.374-97.407 81.194-97.407 150.844 0 49.006 20.153 92.64 51.845 122 22.64 8.588 46.563 10.904 71.406 9.563-26.212-96.096-8.522-185.37 32.5-271-18.534-6.51-37.96-10.382-58.342-11.407zm-41.844 1.782c-43.318 5.686-90.65 23.297-142.5 54.53 24.987 97.103 56.545 155.038 92.78 187.97-15.558-27.26-24.53-59.27-24.53-93.438 0-61.93 29.422-116.84 74.25-149.062zm134.156 25c1.552 6.27 2.92 12.552 4.156 18.844-1.776-.353-3.62-.532-5.5-.532-15.486 0-28.03 12.55-28.03 28.03 0 15.483 12.544 28.033 28.03 28.033 4.33 0 8.432-.967 12.094-2.72 3.26 62.225-9.635 123.823-41.03 179.844 32.597-5.38 66.42-14.65 100.78-22.406 22.463-28.085 36.094-64.734 36.094-105.032 0-8.02-.553-15.9-1.594-23.594-31.27-44.417-66.02-78.693-105-100.468zm-301.875 48.47C36.78 459.957 249.36 479.842 493.063 343.717 306.578 348.125 115.88 532.286 18.625 156.56zm427 82.75c-1.25 33.993-11.342 65.633-27.938 92.28 23.992-4.595 48.14-7.793 72.22-7.813-13.924-30.585-28.636-58.848-44.282-84.467zm41.53 129.81c-127.06 79.076-267.344 111.63-421.03 39.126 130.246 115.856 342.11 82.373 421.03-39.125z"  transform="translate(768, 0) scale(-1, 1) rotate(0, 256, 256) skewX(0) skewY(0)"></path>
//         </g>

//         <x-card.phaserule type="Command"  height="135">
//             <text >
//         <x-card.normalrule>Choose a Monster on the Battlefield. </x-card.normalrule>
// <x-card.normalrule>That Monster may not use a Defense </x-card.normalrule>
// <x-card.normalrule>during this turn.      </x-card.normalrule>
//         </text>
//     </x-card.phaserule>
// </x-card.Skill>
