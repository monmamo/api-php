<?php

return [
    'name' => 'Community Center',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Facility.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Have a hot meal. Hang out with the boys.</x-card.flavortext.line>
</x-card.flavortext>
HTML,

    'content' => <<<'HTML'
        <x-card.concept.staticon type="Facility" />
        <text y="500" filter="url(#solid)">
            <x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
        </text>
HTML
];
