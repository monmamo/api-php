@props(['type','x'=>null,'y'=>0,'width'=>null,'index'=>0])

<?php
use Illuminate\Support\Facades\Blade;

global $rules_dy,$concept_cursor_x,$concept_cursor_y;

$rules_dy ??= 0;
$concept_cursor_x ??= 0;
$concept_cursor_y ??= 0;

$concept_config =  config("card-design.concept");
$icon_height = $concept_config['icon-size'];
$icon_padding = $concept_config['icon-padding'];
$standard_height = $concept_config['standard-height'];

$width ??= config("card-design.viewbox.width");
?>

<symbol id="<?= $type ?>-card" width="<?= $width ?>" height="<?= $standard_height ?>" viewBox="0 0 <?= $width ?> <?= $standard_height ?>">

    <rect width="<?= $width ?>" height="<?= $standard_height ?>" fill="#ffffff" fill-opacity="50%" />
     <g transform="translate(<?= $icon_padding ?>,<?= $icon_padding ?>) scale(<?= $icon_height/config("card-design.icon.size") ?>)" fill="#000000" fill-opacity="1">
        {{ view($type.'.icon') }}
     </g>
     <text x="<?= $concept_config['standard-height'] ?>" y="30" class="cardtype" text-anchor="left" alignment-baseline="central">
      @empty($slot) <?= $type ?>  @endempty
      @isset($slot) {{ $slot }} @endisset
   </text>
</symbol>

<use href="#<?= $type ?>-card" x="<?= $x ?? 0 ?>" y="<?= $y+$index*60+$rules_dy ?>" />
