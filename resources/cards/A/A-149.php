<?php

return [
    'name' => 'Malevolence',

    'concepts' => ['Trait'],

    'image-prompt' => null,
    'image-source' => 'https://thenounproject.com/icon/smiley-2896096/',
    'image-credit' => 'Icon by vecon from the Noun Project',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
<svg height="450" width="450" x="80"  viewBox="0 0 16.933333 21.166666"  ><g transform="translate(0,-280.06667)" style="" display="inline"><path style="display:inline;opacity:1;vector-effect:none;fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" d="M 32 1 A 31.000005 31.000005 0 0 0 1 32 A 31.000005 31.000005 0 0 0 32 63 A 31.000005 31.000005 0 0 0 63 32 A 31.000005 31.000005 0 0 0 32 1 z M 19.005859 18 C 19.139259 17.99642 19.270231 18.019889 19.394531 18.068359 L 27.326172 21.046875 C 27.821872 21.21647 28.021814 21.613552 28.007812 22 C 27.989312 22.516357 27.589414 23.02082 27.007812 23 C 26.887812 22.99571 26.7587 22.968364 26.625 22.914062 L 18.667969 19.933594 C 18.216169 19.771292 17.997812 19.378118 18.007812 18.996094 C 18.015014 18.501139 18.384059 18.01804 19.005859 18 z M 45.001953 18 C 45.623853 18.018035 45.99 18.501139 46 18.996094 C 46.006 19.378118 45.791644 19.771292 45.339844 19.933594 L 37.380859 22.914062 C 37.247159 22.968374 37.12 22.9957 37 23 C 36.4183 23.020824 36.019 22.516357 36 22 C 35.9861 21.613552 36.186041 21.21647 36.681641 21.046875 L 44.611328 18.068359 C 44.735628 18.019879 44.868553 17.9964 45.001953 18 z M 22.003906 24 C 24.201206 24 26.003906 25.802723 26.003906 28 C 26.003906 30.197277 24.201206 32 22.003906 32 C 19.806606 32 18.003906 30.197277 18.003906 28 C 18.003906 25.802723 19.806606 24 22.003906 24 z M 42.003906 24 C 44.201206 24 46.003906 25.802703 46.003906 28 C 46.003906 30.197297 44.201206 32 42.003906 32 C 39.806606 32 38.001953 30.197297 38.001953 28 C 38.001953 25.802703 39.806606 24 42.003906 24 z M 22.003906 26 C 20.887506 26 20.003906 26.883604 20.003906 28 C 20.003906 29.116396 20.887506 30 22.003906 30 C 23.120306 30 24.003906 29.116396 24.003906 28 C 24.003906 26.883604 23.120306 26 22.003906 26 z M 42.003906 26 C 40.887506 26 40.003906 26.883583 40.003906 28 C 40.003906 29.116417 40.887506 30 42.003906 30 C 43.120306 30 44.001953 29.116417 44.001953 28 C 44.001953 26.883583 43.120306 26 42.003906 26 z M 32.005859 37.982422 C 37.899259 37.982865 43.460441 40.721622 47.056641 45.390625 A 1.0001 1.0001 0 0 1 46.214844 47.009766 A 1.0001 1.0001 0 0 1 45.470703 46.609375 C 42.252103 42.430623 37.278506 39.984763 32.003906 39.984375 C 26.729306 39.983973 21.754356 42.42914 18.535156 46.607422 A 1.0001 1.0001 0 1 1 16.953125 45.388672 C 20.550025 40.720209 26.112459 37.981993 32.005859 37.982422 z " transform="matrix(0.26458333,0,0,0.26458333,0,280.06667)"/></g></svg>
<x-card.phaserule type="Resolution" :lines="2">
    <text >
    <x-card.normalrule>Damage done to defender: +1d6</x-card.normalrule>
<x-card.normalrule>Damage prevented: -1d6</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
