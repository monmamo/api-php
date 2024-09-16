@props(['type','y','height'])

<svg  x="0" y="<?= $y ?>" width="<?=  config("card-design.viewbox.width") ?>" height="<?= $height ?>" viewBox="0 0 <?= config("card-design.viewbox.width") ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="100%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view($type.'.icon') }}
     </g>
     {{$slot}}
</svg>