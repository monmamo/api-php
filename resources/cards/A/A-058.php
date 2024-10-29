<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\SvgHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Keen Eye')]

    #[Concept('Trait')]

    #[ImageCredit('Image by Lorc on Game-Icons.net')]

    #[FlavorText('Prevents other monsters from lowering accuracy.')]
    #[SvgHeroImage('<path d="M256.242 19.143c-1.3.007-2.598.026-3.896.054-8.782.195-17.528.884-26.198 2.053l13.957 18.725L276.9 68.008l-48.474-11.682-22.586-31.424c-24.033 5.413-47.187 14.583-68.522 27.258l4.67 19.35 58.403 10.51-2.335 50.812-17.522-35.623-53.728-9.347-6.063-24.886C105.56 73.832 91.536 86.61 79.064 101.203l13.866 45.06 54.898 8.176-68.33 13.433-14.633-48.287c-3.82 5.484-7.44 11.173-10.844 17.068-12.047 20.868-20.527 42.807-25.64 65.114l49.368 23.92 49.06-.58-49.06 21.607-18.105-8.81v25.747h30.37l-49.058 18.69v-53.526l-16.13-7.847c-5.85 41.047-.63 82.657 14.546 120.55l21.44-23.553 12.37 11.498 34.103-12.99-21.453 24.75 16.443 15.285-40.296-12.264-14.17 15.908c9.358 18.52 21.22 35.9 35.44 51.586l40.896-.158-28.047 13.262c13.04 12.287 27.692 23.278 43.89 32.63 112.427 64.91 255.91 26.462 320.82-85.964 64.91-112.427 26.464-255.91-85.962-320.82-21.172-12.224-43.447-20.773-66.09-25.862l9.207 25.723-29.07-29.292c-10.874-1.472-21.782-2.176-32.648-2.115zm81.076 126.125c21.167.245 42.198 5.62 61.43 16.72 65.644 37.893 83.97 127.31 42.557 199.026-41.41 71.71-128.022 100.554-193.666 62.662-65.645-37.893-83.97-127.31-42.558-199.026 28.47-49.303 78.305-78.34 128.002-79.363 1.412-.03 2.823-.036 4.234-.02zm-.59 18.67c-1.217-.013-2.435-.004-3.654.023-18.408.41-36.93 5.29-54.09 14.185l34.21 53.44c-5.373 3.022-10.486 6.663-15.227 10.874l-34.947-54.59c-16.317 11.548-30.75 27.068-41.754 46.126-.784 1.358-1.534 2.723-2.27 4.092l62.068 24.504c-.47.76-.93 1.525-1.38 2.303-2.737 4.728-4.987 9.607-6.79 14.564l-61.72-24.366c-10.588 27.475-12.18 56.18-5.824 81.922l62.4-21.23c.464 6.36 1.638 12.59 3.516 18.544l-60.073 20.44c9.103 21.78 24.502 40.32 45.436 52.51l30.73-45c4.197 4.524 9.037 8.537 14.5 11.904l-28.08 41.12c20.49 7.43 42.64 8.273 64.046 3.23l.31-33.95c6.27.064 12.55-.674 18.71-2.166l-.276 30.12c12.81-5.225 25.06-12.622 36.186-22.013l-11.71-18.29c5.255-3.254 10.23-7.108 14.808-11.53l10.613 16.578c6.93-7.642 13.213-16.193 18.654-25.615 1.91-3.307 3.67-6.652 5.294-10.023l-16.094-6.354c2.808-5.71 4.987-11.582 6.504-17.522l16.633 6.566c5.45-16.308 7.792-32.934 7.25-49.018l-22.186 7.55c-.993-6.236-2.702-12.283-5.09-18.01l25.246-8.588c-3.6-19.748-11.75-38.048-24.008-53.122l-22.637 33.147c-2.68-2.13-5.547-4.092-8.602-5.852-2.448-1.408-4.95-2.642-7.487-3.725l25.425-37.23c-4.898-4.2-10.218-7.997-15.96-11.31-9.707-5.605-20.006-9.5-30.587-11.784l-.502 54.96c-2.52-.213-5.05-.3-7.58-.248-3.716.073-7.43.437-11.115 1.06l.532-58.135c-1.14-.046-2.28-.078-3.423-.09zm15.786 75.83c3.027.026 6.037.308 9.006.84-7.354 7.116-12.168 18.937-12.168 32.326 0 21.752 12.7 39.384 28.367 39.384 12.172 0 22.55-10.647 26.577-25.597 2.1 14.36-.655 30.18-9.07 44.72-18.287 31.595-55.212 43.19-82.24 27.623-27.03-15.567-35.414-53.21-17.128-84.805 12.57-21.722 33.953-33.99 54.872-34.477.595-.013 1.188-.018 1.782-.012z" fill="#ffffff" fill-opacity="1" stroke-width="5"></path>')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="3">
        <text >
<x-card.normalrule>Ignore any Defense or effect that</x-card.normalrule>
<x-card.normalrule> would reduce or prevent the damage</x-card.normalrule>
<x-card.normalrule>done by this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
