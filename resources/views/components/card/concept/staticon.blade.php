@props(['type','x'=>610,'y'=>370,'dx'=>1,'value'=>null,'label'=>null])

<?php
use Illuminate\Support\Facades\Blade;

global $staticon_x;

$staticon_x ??= $x - 64*$dx;

$concept_config =  config("card-design.concept");
$icon_height = $concept_config['icon-size'];
$icon_padding = $concept_config['icon-padding'];
$standard_height = $concept_config['standard-height'];

$width ??= config("card-design.viewbox.width");

?>
<svg x="{{$staticon_x }}" y="{{$y}}" xmlns="http://www.w3.org/2000/svg" width="64" height="80" viewBox="0 0 512 640" >


    <g class="stat">
        <rect x="0" y="0" width="512" height="640" fill="#ffffff" fill-opacity="50%" />
        <g class="icon">{{view($type.'.icon')}}</g>
        @isset($badge)
        <g class="concept-icon-badge" fill="#000000" fill-opacity="1" filter="url(#icon-overlay-shadow)">
         {{ view($badge.'.icon') }}
      </g>
        @endisset
   
         <text class="value" x="256px" y="440px" filter="url(#icon-overlay-shadow)"   >{{$value ?? null}}</text>  
        <text class="gloss" x="256px" y="590px"  >{{$label ?? strtoupper($type)}}</text>
        </g>
    </svg>

    <?php
    $staticon_x += 64;
    ?>