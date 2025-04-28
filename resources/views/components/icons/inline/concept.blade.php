@props(['badge','value','concept','x'=>0,'size'])

<?php
assert(!isset($concept) || $concept instanceof \App\Concept);

$badge ??= $concept->badge ?? null;
$value ??= $concept->value ?? false;

$type = $slot->isEmpty() ? $concept->type : "$slot";
assert(is_string($type));
assert($type !== '');

assert(!is_null($size));

$viewBox = \App\Strings\viewBox(width: 512, height: 512); // horizontal_overflow: \App\Concept::OVERFLOW_RATIO
?>

<x-svg :$x :$size :$viewBox>
    <defs>
        <x-svg.filters.icon-overlay-shadow />
    </defs>

{{--    <rect x="0" y="0" width="512" height="512" fill="#aaaa00"  /> --}}
    
    <g fill="{{$value === false ? 'black' : '#C0C0C0'}}" fill-opacity="1">{{view(($type).".icon")}}</g>

    @isset($badge) 
        <g class="concept-icon-badge" fill="#000000" fill-opacity="1">{{  \view($badge . '.icon')}}</g>
        @endisset

        @if($value!==false) 
        <text font-family="'Roboto Condensed', sans-serif" font-style="normal" font-size="400px" fill="#000000" paint-order="stroke" font-width="200" stroke="#000000" stroke-width="8px" stroke-linecap="butt" stroke-linejoin="miter" letter-spacing="-12px" text-anchor="middle" alignment-baseline="baseline"  x="256px" y="440px" >{{ $value }}</text> {{-- filter="url(#icon-overlay-shadow)" --}}
        @endif

</x-svg>