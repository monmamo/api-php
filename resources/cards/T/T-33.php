<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Agility')]
#[Concept('Trait')]
#[Concept('Physical')]
#[ImageCredit('Image by DarkZaitzev on Game-Icons.net under CC BY 3.0')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g class="svg-hero">
        <path d="M140.488 19.31C140.488 19.31 113.762 84.894 115.916 95.044C117.794 104.235 125.222 95.36 128.373 102.108C133.963 113.911 183.715 195.771 177.555 200.734C175.997 202.094 138.175 200.332 109.594 194.889C57.104 184.891 14.772 197.241 32.555 237.099C58.732 295.752 165.705 391.239 130.445 420.701C89.601 454.86 150.265 537.95 209.72 461.009C220.605 446.924 239.076 387.808 208.106 391.43C170.659 395.81 193.978 360.939 193.978 360.939L217.323 331.019C230.283 329.119 351.857 309.57 351.857 309.57L347.631 282.568L173.156 302.818C173.156 302.818 148.996 270.365 137.192 252.131C127.822 240.657 199.197 257.011 213.58 241.609C233.548 220.333 221.181 197.729 221.181 197.729L155.35 69.201Z" class="selected" fill="#ffffff" fill-opacity="1"></path>
        <path d="M255.107 63.287L192.348 102.706L208.429 131.603L323.36 72.743Z" fill="#808080" fill-opacity="1"></path>
        <path d="M130.364 142.127L83.673 173.739L131.897 184.183L149.314 172.053Z" fill="#808080" fill-opacity="1"></path>
        <path d="M305.444 166.623L253.278 200.993L305.247 233.455L305.305 211.525C357.174 223.955 445.525 259.655 431.777 402.785L455.685 328.896L483.569 362.282C478.067 195.379 333.032 191.689 305.379 190.673Z" fill="#C0C0C0" fill-opacity="1"></path>
        <path d="M231.068 342.576L211.158 368.449L322.048 383.146C322.048 383.146 340.686 365.306 337.083 364.17C309.371 355.547 257.197 347.2 231.068 342.576Z" fill="#808080" fill-opacity="1"></path>
    </g>

<x-card.cardrule lines="2">
    <x-card.normalrule>Speed +1d6</x-card.normalrule>
    <x-card.normalrule>(rolled when attached to the Monster).</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
