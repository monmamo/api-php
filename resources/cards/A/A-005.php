<?php

return [
    'name' => 'Community Center',
    'concepts' => ['Facility'],

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Facility.background') }}
'flavor-text' => [
    'Have a hot meal. Hang out with the boys.'
],
HTML,

    'content' => <<<'HTML'
        <text y="500" filter="url(#solid)">
            <x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
        </text>
HTML
];
