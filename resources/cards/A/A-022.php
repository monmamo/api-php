<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Easter Egg')]
#[Concept('Draw')]
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <defs>
        <filter id="egg-shadow" height="300%" width="300%" x="-100%" y="-100%">
            <feFlood flood-color="rgba(66, 121, 0, 1)" result="flood"></feFlood>
            <feComposite in="flood" in2="SourceGraphic" operator="out" result="composite"></feComposite>
            <feGaussianBlur in="composite" stdDeviation="15" result="blur"></feGaussianBlur>
            <feOffset dx="0" dy="0" result="offset"></feOffset>
            <feComposite in2="SourceGraphic" in="offset" operator="atop"></feComposite>
        </filter>
    </defs>
<g id="hero">
    <g transform="translate(@cardspec(hero.icon.translate.x),@cardspec(hero.icon.translate.y)) scale(@cardspec(hero.icon.scale))" fill="#000000" fill-opacity="1">
        {{view('icons.blank-card')}}
    </g>

    <g transform="translate(151.4,40) scale(0.6) " fill="#FFFFFF" fill-opacity="1">
        <path
            d="M256 24.998c-20.25 0-39.997 12.86-58.574 35.248-10.389 12.52-20.203 27.836-29.248 44.756h175.644c-9.045-16.92-18.86-32.236-29.248-44.756C295.997 37.858 276.25 24.998 256 24.998zm-62.414 98c11.206 5.37 19.633 15.693 22.414 28.08 2.781-12.387 11.208-22.71 22.414-28.08h-44.828zm80 0c11.206 5.37 19.633 15.693 22.414 28.08 2.781-12.387 11.208-22.71 22.414-28.08h-44.828zm-97.586 14c-12.81 0-23 10.192-23 23 0 12.81 10.192 23 23 23 12.81 0 23-10.192 23-23 0-12.81-10.192-23-23-23.002zm80 0c-12.81 0-23 10.192-23 23 0 12.81 10.192 23 23 23 12.81 0 23-10.192 23-23 0-12.81-10.192-23-23-23.002zm80 0c-12.81 0-23 10.192-23 23 0 12.81 10.192 23 23 23 12.81 0 23-10.192 23-23 0-12.81-10.192-23-23-23.002zm-120 31.924c-2.781 12.387-11.208 22.71-22.414 28.08h44.828c-11.206-5.37-19.633-15.693-22.414-28.08zm80 0c-2.781 12.387-11.208 22.71-22.414 28.08h44.828c-11.206-5.37-19.633-15.693-22.414-28.08zm-158.17 5.976a677.419 677.419 0 0 0-7.406 22.104h27.99c-9.349-4.48-16.765-12.408-20.584-22.104zm236.34 0c-3.819 9.696-11.235 17.623-20.584 22.104h27.99a677.419 677.419 0 0 0-7.406-22.104zm-249.184 40.1a716.98 716.98 0 0 0-9.31 35.727c3.57-2.272 7.676-3.723 12.324-3.723 4.994 0 9.963 2.017 13.342 5.129 3.379 3.112 5.357 6.888 6.79 10.703 2.868 7.63 3.777 16.03 4.796 24.03 1.018 8 2.145 15.6 3.787 19.97.82 2.185 1.716 3.41 2.137 3.797.42.388.179.371 1.148.371.97 0 .727.017 1.148-.371.421-.388 1.316-1.612 2.137-3.797 1.642-4.37 2.769-11.97 3.787-19.97 1.019-8 1.928-16.4 4.795-24.03 1.434-3.815 3.412-7.59 6.791-10.703 3.379-3.112 8.348-5.13 13.342-5.13s9.963 2.018 13.342 5.13c3.379 3.112 5.357 6.888 6.79 10.703 2.868 7.63 3.777 16.03 4.796 24.03 1.018 8 2.145 15.6 3.787 19.97.82 2.185 1.716 3.41 2.137 3.797.42.388.179.371 1.148.371.97 0 .727.017 1.148-.371.421-.388 1.316-1.612 2.137-3.797 1.642-4.37 2.769-11.97 3.787-19.97 1.019-8 1.928-16.4 4.795-24.03 1.434-3.815 3.412-7.59 6.791-10.703 3.379-3.112 8.348-5.13 13.342-5.13s9.963 2.018 13.342 5.13c3.379 3.112 5.357 6.888 6.79 10.703 2.868 7.63 3.777 16.03 4.796 24.03 1.018 8 2.145 15.6 3.787 19.97.82 2.185 1.716 3.41 2.137 3.797.42.388.179.371 1.148.371.97 0 .727.017 1.148-.371.421-.388 1.316-1.612 2.137-3.797 1.642-4.37 2.769-11.97 3.787-19.97 1.019-8 1.928-16.4 4.795-24.03 1.434-3.815 3.412-7.59 6.791-10.703 3.379-3.112 8.348-5.13 13.342-5.13s9.963 2.018 13.342 5.13c3.379 3.112 5.357 6.888 6.79 10.703 2.868 7.63 3.777 16.03 4.796 24.03 1.018 8 2.145 15.6 3.787 19.97.82 2.185 1.716 3.41 2.137 3.797.42.388.179.371 1.148.371.97 0 .727.017 1.148-.371.421-.388 1.316-1.612 2.137-3.797 1.642-4.37 2.769-11.97 3.787-19.97 1.019-8 1.928-16.4 4.795-24.03 1.434-3.815 3.412-7.59 6.791-10.703 3.379-3.112 8.348-5.13 13.342-5.13 4.648 0 8.753 1.452 12.324 3.724a716.98 716.98 0 0 0-9.31-35.727H124.986zm3.014 50c-1.938 0-4.385 1.347-7.643 6.094s-6.357 12.087-8.714 19.601c-4.485 14.3-6.454 28.54-6.641 29.93.034 20.316 1.718 38.365 4.86 54.379h292.277c3.14-16.014 4.825-34.063 4.859-54.379-.187-1.39-2.156-15.63-6.64-29.93-2.358-7.514-5.457-14.854-8.715-19.601s-5.705-6.094-7.643-6.094c-.97 0-.727-.017-1.148.371-.421.388-1.316 1.612-2.137 3.797-1.642 4.37-2.769 11.97-3.787 19.97-1.019 8-1.928 16.4-4.795 24.03-1.434 3.815-3.412 7.59-6.791 10.703-3.379 3.112-8.348 5.129-13.342 5.129s-9.963-2.017-13.342-5.129c-3.379-3.112-5.357-6.888-6.79-10.703-2.868-7.63-3.777-16.03-4.796-24.03-1.018-8-2.145-15.6-3.787-19.97-.82-2.185-1.716-3.41-2.137-3.797-.42-.388-.179-.371-1.148-.371-.97 0-.727-.017-1.148.371-.421.388-1.316 1.612-2.137 3.797-1.642 4.37-2.769 11.97-3.787 19.97-1.019 8-1.928 16.4-4.795 24.03-1.434 3.815-3.412 7.59-6.791 10.703-3.379 3.112-8.348 5.129-13.342 5.129s-9.963-2.017-13.342-5.129c-3.379-3.112-5.357-6.888-6.79-10.703-2.868-7.63-3.777-16.03-4.796-24.03-1.018-8-2.145-15.6-3.787-19.97-.82-2.185-1.716-3.41-2.137-3.797-.42-.388-.179-.371-1.148-.371-.97 0-.727-.017-1.148.371-.421.388-1.316 1.612-2.137 3.797-1.642 4.37-2.769 11.97-3.787 19.97-1.019 8-1.928 16.4-4.795 24.03-1.434 3.815-3.412 7.59-6.791 10.703-3.379 3.112-8.348 5.129-13.342 5.129s-9.963-2.017-13.342-5.129c-3.379-3.112-5.357-6.888-6.79-10.703-2.868-7.63-3.777-16.03-4.796-24.03-1.018-8-2.145-15.6-3.787-19.97-.82-2.185-1.716-3.41-2.137-3.797-.42-.388-.179-.371-1.148-.371-.97 0-.727-.017-1.148.371-.421.388-1.316 1.612-2.137 3.797-1.642 4.37-2.769 11.97-3.787 19.97-1.019 8-1.928 16.4-4.795 24.03-1.434 3.815-3.412 7.59-6.791 10.703-3.379 3.112-8.348 5.129-13.342 5.129s-9.963-2.017-13.342-5.129c-3.379-3.112-5.357-6.888-6.79-10.703-2.868-7.63-3.777-16.03-4.796-24.03-1.018-8-2.145-15.6-3.787-19.97-.82-2.185-1.716-3.41-2.137-3.797-.42-.388-.179-.371-1.148-.371zm-13.752 128c4.453 15.05 10.424 27.958 17.715 38.951l41.547-38.951h-59.262zm97.129 0L256 432.043l44.623-39.045h-89.246zm127.113 0l41.547 38.951c7.29-10.993 13.262-23.902 17.715-38.951H338.49zm-146.281 7.143l-41.453 38.861h85.867l-44.414-38.861zm127.582 0l-44.414 38.861h85.867l-41.453-38.861zm-165.277 56.857C179.83 477.7 214.174 487 256 487.002c41.827 0 76.17-9.302 101.486-30.004H154.514z"
            filter="url(#egg-shadow)"></path>
    </g>
    <rect x="180" y="350" width="250" height="35" fill="#FFFFFF" fill-opacity="1" />
</g>

        <text y="460" filter="url(#solid)">
            <x-card.normalrule>Search your Library for a card that makes a</x-card.normalrule>
            <x-card.normalrule>cultural reference. Reveal the card. Explain</x-card.normalrule>
            <x-card.normalrule>the reference. If nobody can disprove you,</x-card.normalrule>
            <x-card.normalrule>put the card in your hand.</x-card.normalrule>
            <x-card.normalrule>Otherwise discard the card.</x-card.normalrule>
            <x-card.normalrule>Then shuffle your Library.</x-card.normalrule>
            <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
            </text>

HTML;
    }
};
