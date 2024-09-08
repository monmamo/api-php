@props(['type','index'=>0,'x'=>0,'y'=>0,'width'])
<?php
if (!defined('STAT_ICON_SIZE')) {
    \define('STAT_ICON_SIZE', 54);
    \define('STAT_ICON_SCALE', 54/config('card-design.icon.size'));
    \define('STAT_ICON_SHIFT', 2);
    \define('STAT_ICON_BOX_SIZE', STAT_ICON_SIZE + STAT_ICON_SHIFT+STAT_ICON_SHIFT);
}

$index = intval($index);
$width = config("card-design.viewbox.width");; // may be calculated later
$height = STAT_ICON_BOX_SIZE;
$y += $height * $index;
?>



<svg  x="{{$x}}" y="{{$y}}" width="{{$width}}" height="{{$height}}" viewBox="0 0 {{$width}} {{$height}}">
<g transform="translate({{STAT_ICON_SHIFT}},{{STAT_ICON_SHIFT}}) scale({{STAT_ICON_SCALE}})" fill="#000000" fill-opacity="1" filter="url(#solid)"><?php
    require resource_path("concepts/{$type}/icon.blade.php");
    ?>
    </g>

@if($slot instanceof \Illuminate\View\ComponentSlot)
@if($slot->isEmpty())
<text x="{{STAT_ICON_BOX_SIZE+5}}" y="{{$height/2}}" font-size="40px" text-anchor="left" alignment-baseline="central" filter="url(#solid)">{{$type}}</text>
@else
<text x="{{STAT_ICON_BOX_SIZE+5}}" y="{{$height/2}}" font-size="40px" text-anchor="left" alignment-baseline="central" filter="url(#solid)">{{$slot}}</text>
@endif
@endif

</svg>