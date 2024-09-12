@props(['slug','rectFill'=>'#FFFFFF'])
<?php
$width = config("card-design.$slug.width");
$height = config("card-design.$slug.height");

$rectFill = match(true) {
    is_string($rectFill) => $rectFill,
    $rectFill === false => null,    
};

$attributes = [
    'id' => $slug,
    'x' => config("card-design.$slug.x"),
    'y' => config("card-design.$slug.y"),
    'width' => $width,
    'height' =>$height,
    'viewBox' => "0 0 $width $height",
];

$rect_attributes = [
    'x' => 0,
    'y' => 0,
    'width' => $width,
    'height' => $height,
];

?>
<svg {{new \Illuminate\View\ComponentAttributeBag($attributes)}}>

    <rect class="{{$slug}}" {{new \Illuminate\View\ComponentAttributeBag($rect_attributes)}} />

    {{$slot}}
</svg>