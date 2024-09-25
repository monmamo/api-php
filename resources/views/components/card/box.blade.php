@props(['slug','rectFill'=>'#FFFFFF'])
<?php
extract(config("card-design.$slug")); // sets $x, $y, $width, $height
$height = config("card-design.$slug.height");

$rectFill = match(true) {
    is_string($rectFill) => $rectFill,
    $rectFill === false => null,    
};

$rect_attributes = [
    'x' => 0,
    'y' => 0,
    'width' => $width,
    'height' => $height,
];

?>
<x-svg :id="$slug" :$x :$y :$height :$width>
    <rect class="{{$slug}}" {{new \Illuminate\View\ComponentAttributeBag($rect_attributes)}} />
    {{$slot}}
</x-svg>