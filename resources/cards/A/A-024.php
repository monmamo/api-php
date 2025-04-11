<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Burglary')]
#[Concept('Draw')]
#[Concept('Criminal')]
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M70.533 100.452c-22.862 27.542-36.27 64.923-37.766 96.702-.9 19.145 9.6 42.616 25.276 61.47 15.674 18.855 36.465 32.678 51.753 35.028 11.256.74 19.522-9.182 25.182-16.5 9.537-12.442 19.204-30.678 29.36-49.014 10.155-18.336 20.77-36.82 33.798-50.467 13.028-13.645 30.24-22.73 49.442-17.89 3.34 1.09 3.565 1.663 12.38 8.788 12.605 10.736 26.244 21.81 41.694 39.33l3.803 3.486 10.238-6.06c-20.92-23.726-38.623-51.403-57.006-76.168-27.153-36.58-54.84-65.76-94.205-69.893-36.138-3.317-74.585 18.428-93.95 41.19zm266.053-2.414c-3.507.063-7.26.632-11.217 1.733-7.08 1.97-14.577 5.722-21.718 11.09l60.545 12.47c-.844-8.415-4.142-15.068-9.524-19.503-4.425-3.646-10.055-5.63-16.6-5.785-.49-.01-.987-.013-1.487-.004zm12.787 33.34l-6.83 15.805 18.148 9.95zm-51.254 21.785c9.177 12.81 18.397 25.33 28.04 36.72 7.273-4.386 14.418-10.424 20.662-18a86.045 86.045 0 0 0 2.713-3.49zm-62.702 23.266c-8.527.283-15.98 4.993-24.262 13.67-29.706 32.65-56.175 92.534-24.877 134.35 11.81 14.805 71.805 33.64 129.122 34.264 38.29 26.563 62.975 62.86 93.86 94.36 18.564-26.89 34.903-54.124 70.025-78.467L459.423 361.2c-26.72 8.057-36.142 26.154-50.656 41.217-18.296-25.715-41.06-49.166-65.555-69.527-17.72-14.73-38.605-25.1-58.11-37.434 2.437-.69-6.538-19.77-7.556-21.99-29.352-7.035-49.364-22.817-62.138-39.367l14.25-11c13.5 17.492 35.288 33.754 73.69 35.933 19.65-2.818 29.578-6.955 35.335-11.704 5.626-4.64 8.615-10.964 12.895-20.618 1.095-6.312-.25-7.85-2.84-10.1-1.95-1.696-5.246-3.2-8.787-4.732l-39.023 23.104-4.886-6.094c-17.46-21.77-31.722-33.02-46.578-45.623-3.633-3.94-7.452-6.648-12.324-6.836a25 25 0 0 0-1.72 0zM109.8 312.53c-20.436 15.367-42.69 27.405-71.017 28.307l2.978 27.315 58.107-18.873c19.65 23.613 32.977 51.093 65.314 68.364 37.673-12.64 57.61-32.233 77.46-50.98-21.403-6.467-42.72-14.485-61.496-24.495l-14.232 34.423z"></path></g></x-card.hero.svg>

<x-card.phaserule type="Draw" lines="5">
        <text >
    <x-card.normalrule>Choose an opponent.</x-card.normalrule>
    <x-card.normalrule>Choose 1d4 cards from his hand</x-card.normalrule>
    <x-card.normalrule>(without looking at them).</x-card.normalrule>
    <x-card.normalrule>He must discard those cards.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
