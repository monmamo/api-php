<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sleight of Hand')]
#[Concept('Draw')]
#[Concept('Cost', 2)]
#[ImageCredit('Icon by Eucalyp from the Noun Project')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.hero.svg viewBox="0 0 400 480">
    <circle cx="264" cy="24" r="24" fill="white" />
<circle cx="136" cy="24" r="24" fill="white" />
<circle cx="336" cy="120" r="24" fill="white" />
<circle cx="56" cy="152" r="24" fill="white" />
<path d="M386.797,120c-4.21,0-8.201,2.033-10.678,5.438l-0.617,0.849c-2.032,12.813-10.171,23.613-21.331,29.329l-32.676,44.929   c-3.394,4.667-8.866,7.455-14.64,7.455C296.459,208,288,199.529,288,189.116v-0.201c0-3.968,0.519-7.923,1.541-11.755   l10.551-39.559C297.476,132.286,296,126.313,296,120c0-13.773,6.998-25.942,17.624-33.14l5.932-22.241   c0.295-1.106,0.444-2.248,0.444-3.393v-0.245c0-3.467-1.352-6.723-3.806-9.167c-2.47-2.46-5.774-3.814-9.304-3.814h-0.709   c-7.36,0-13.779,4.718-15.974,11.739c-8.968,28.701-26.493,84.794-32.492,104.005c-2.289,7.33-9.006,12.256-16.714,12.256h-0.197   c-9.229,0-16.786-7.221-17.205-16.439l-6.5-143.224C216.685,7.176,209.122,0,199.883,0h-0.603c-8.771,0-15.954,6.864-16.352,15.626   l-6.526,143.703c-0.425,9.348-8.088,16.671-17.445,16.671h-0.483c-7.256,0-13.645-4.37-16.276-11.133L94.432,42.041   c-2.372-6.1-8.133-10.04-14.678-10.039h-0.593C70.802,32.003,64,38.806,64,47.166v0.586c0,4.534,0.785,8.994,2.335,13.254   l59.361,163.248c1.553,4.271,2.318,8.742,2.275,13.288l-0.002,0.202C127.873,247.81,119.604,256,109.537,256h-0.204   c-5.689,0-11.133-2.713-14.559-7.257l-22.132-29.367C59.724,202.234,39.197,192,17.732,192h-0.94C7.533,192,0,199.619,0,208.985   v1.328c0,5.794,2.934,11.087,7.848,14.158l0.493,0.309c35.274,22.046,63.138,53.668,80.572,91.442l5.588,12.107   c10.048,21.769,25.318,40.958,44.234,55.671h138.526c18.833-14.677,33.728-33.95,43.142-55.917l75.99-177.311   c2.394-5.584,3.606-11.495,3.606-17.569C400,125.923,394.077,120,386.797,120z" fill="#e2ad89" />
<rect x="144" y="400" width="128" height="16" />
<rect x="128" y="432" width="160" height="32"/>
</x-card.hero.svg>

<x-card.flavortext>You didn't see that.</x-card.flavortext>

<x-card.cardrule >
<x-card.normalrule>Put any number of cards from your</x-card.normalrule>
    <x-card.normalrule>hand on the bottom of your Library in</x-card.normalrule>
    <x-card.normalrule>any order. Then, draw a card for each card</x-card.normalrule>
    <x-card.normalrule>you put on the bottom of your Library.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
        }
    };
