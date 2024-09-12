{{-- The rulebox is a subset of the viewbox that does not include the hero image, flavor text or titlebox. --}}
@props(['y'=>500])
<?php
use Illuminate\Support\Facades\Blade;

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

<text x="50%" y="20%" width="100%" height="80%" filter="url(#solid)">
        <?php foreach (\App\Strings\explode_lines( $small ?? '') as $index => $line) { 
            echo Blade::render("@smallrule($line)");
 } 
 foreach (\App\Strings\explode_lines( $normal ?? '' ) as $index => $line) { 
echo Blade::render("@normalrule($line)");
 } ?>
</text>


</svg>