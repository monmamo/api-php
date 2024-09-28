<?php

return [
    'name' => 'Unknown Allergen',
    'concepts' => ['Bane'],
    'image-credit' => "Image by Delapouite on Game-Icons.net under CC BY 3.0",
    'flavor-text' => ['Get the tissues.'],
    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Bane.background') }}
<defs><filter id="bane-shadow" height="300%" width="300%" x="-100%" y="-100%"><feFlood flood-color="rgba(238, 21, 21, 1)" result="flood"></feFlood><feComposite in="flood" in2="SourceGraphic" operator="out" result="composite"></feComposite><feGaussianBlur in="composite" stdDeviation="25" result="blur"></feGaussianBlur><feOffset dx="0" dy="0" result="offset"></feOffset><feComposite in2="SourceGraphic" in="offset" operator="atop"></feComposite></filter></defs><g class="" transform="translate(-9,-240) scale(1.5)" ><path d="M177.664 38c-6.95 103.71-7.898 212.628-46.676 270.396-25.073 37.353-38.137 65.895-42.94 88.59-4.8 22.695-.85 40.19 8.563 51.965 18.828 23.553 52.752 22.828 66.824 22.532a9 9 0 0 0 3.168-17.416 34.564 18.29 0 0 0 8.384-4.152c3.072 2.195 6.165 4.695 9.34 7.418 16.668 14.295 35.994 34.946 67.877 34.668 31.853-.277 55.89-20.32 76.385-34.81 3.45-2.44 6.8-4.708 10.055-6.764a34.564 17.756 0 0 0 7.925 3.29 9 9 0 0 0 1.998 17.766c14.072.296 47.996 1.02 66.823-22.53 9.412-11.776 13.363-29.27 8.56-51.966-4.8-22.695-17.865-51.237-42.938-88.59C342.234 250.628 341.286 141.71 334.336 38h-18.03c6.85 103.14 5.31 214.207 49.76 280.428 24.305 36.207 36.224 63.147 40.274 82.285 4.05 19.138.72 29.826-5.014 37-.917 1.147-1.948 2.204-3.058 3.195a34.564 17.756 0 0 0 .378-2.476 34.564 17.756 0 0 0-34.564-17.756 34.564 17.756 0 0 0-33.512 13.496c-4.18 2.597-8.28 5.428-12.373 8.32-21.223 15.004-42 31.298-66.15 31.508-24.12.21-38.228-15.087-56.004-30.332-5.378-4.613-11.062-9.184-17.445-12.902a34.564 18.29 0 0 0-31.02-10.246 34.564 18.29 0 0 0-34.562 18.29 34.564 18.29 0 0 0 .156 1.594c-.898-.844-1.736-1.738-2.498-2.69-5.735-7.175-9.063-17.863-5.014-37 4.05-19.14 15.97-46.08 40.274-82.286 44.45-66.22 42.91-177.288 49.76-280.428h-18.03z" fill="#fff" fill-opacity="1" filter="url(#bane-shadow)"></path></g>
HTML,

    'content' => <<<'HTML'
<text y="500" filter="url(#solid)">
    <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
    </text >

    <x-card.phaserule type="Resolution" height="135">
            <text >                
<x-card.normalrule>For 1d6 turns,</x-card.normalrule>
<x-card.normalrule>once all other effects have been resolved,</x-card.normalrule>
<x-card.normalrule>this Monster takes 1d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
