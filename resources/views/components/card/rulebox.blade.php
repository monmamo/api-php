{{-- The rulebox is a subset of the viewbox that does not include the hero image, flavor text or titlebox. --}}
@props(['y'=>500])
<?php
use Illuminate\Support\Facades\Blade;

global $rules_dy;

$width = config("card-design.viewbox.width");
$height = config("card-design.viewbox.height")-config("card-design.titlebox.height")-$y;

$svg_attributes = [
    'id'=>"rulebox",
    'x' => 0,
    'y' => $y ,
    'width' => $width,
    'height' => $height,
'viewBox'=>"0 0 $width $height"
];
?>

<svg  {{new \Illuminate\View\ComponentAttributeBag($svg_attributes)}} >

    {{$slot}}

</svg>

<rect x="0" y="<?= $y ?>" width="<?= $width ?>" height="<?= $height ?>" fill-opacity="0" stroke-width="3" class="debug"/>