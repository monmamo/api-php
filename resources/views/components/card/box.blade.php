@props(['slug','rect_fill'=>'#FFFFFF'])
<?php
$width = config("card-design.$slug.width");
$height = config("card-design.$slug.height");

$rect_fill = match(true) {
    is_string($rect_fill) => $rect_fill,
    $rect_fill === false => null,    
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
    'fill' => $rect_fill,
    'fill-opacity' => is_null($rect_fill) ? 0 : 1,
];

?>
<svg {{new \Illuminate\View\ComponentAttributeBag($attributes)}}>

    <rect {{new \Illuminate\View\ComponentAttributeBag($rect_attributes)}} />

    {{$slot}}
</svg>