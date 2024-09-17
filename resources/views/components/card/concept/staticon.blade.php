@props(['type','x','y'=>0,'dx','value'=>null,'label'=>null])

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


$x ??= 325+64*$dx;

?>
<svg x="{{$x}}" y="{{$y}}" xmlns="http://www.w3.org/2000/svg" width="64" height="80" viewBox="0 0 512 640" >

    <g class="stat">
        <g class="icon">{{view($type.'.icon')}}</g>
         <text class="value" x="256px" y="440px"  >{{$value ?? null}}</text> {{-- filter="url(#shadow-1)"  --}}
        <text class="gloss" x="256px" y="590px"  >{{$label ?? strtoupper($type)}}</text>
        </g>
    </svg>