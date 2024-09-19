@props(['type','y','height'=>30,'lines'=>0,'repeat'=>false,'badge'=>null])
<?php
$height += $lines*35;
$y ??= config("card-design.titlebox.y")-$height-85;
?>

<svg  x="0" y="<?= $y ?>" width="<?=  config("card-design.viewbox.width") ?>" height="<?= $height ?>" viewBox="0 0 <?= config("card-design.viewbox.width") ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="100%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view($type.'.icon') }}
     </g>
     @isset($badge)
     <g class="concept-icon-badge" fill="#000000" fill-opacity="1" filter="url(#icon-overlay-shadow)">
      {{ view($badge.'.icon') }}
   </g>
       @endisset  
     {{$slot}}
</svg>