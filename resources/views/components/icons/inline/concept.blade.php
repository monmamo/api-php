@props(['fill','badge','value','concept','x'=>0,'size'])

<?php
assert(!isset($concept) || $concept instanceof \App\Concept);

$badge ??= $concept->badge ?? null;
$value ??= $concept->value ?? false;
$fill ??= ($value === false ? 'black' : '#C0C0C0');

$type = $slot->isEmpty() ? $concept->type : "$slot";
assert(is_string($type));
assert($type !== '');

assert(!is_null($size));

if ($value!==false) {
    $actual_x = $x - $size * \App\Concept::OVERFLOW_RATIO;
    $width = $size *(1+2*\App\Concept::OVERFLOW_RATIO);
    $viewBox = \App\Strings\viewBox(width: 512, height: 512, horizontal_overflow: \App\Concept::OVERFLOW_RATIO);
} else {
    $actual_x = $x;
    $width = $size;
    $viewBox = \App\Strings\viewBox(width: 512, height: 512);
}

?>

@once
<defs>
    <x-svg.filters.icon-overlay-shadow />
</defs>
@endonce

<symbol id="{{$concept->type}}-symbol" width="{{$width}}" height="{{$size}}" viewBox="{{$viewBox}}">
    <g fill="{{$fill}}" fill-opacity="1">{{view(($type).".icon")}}</g>

    @isset($badge) 
        <g class="concept-icon-badge" fill="#000000" fill-opacity="1">{{  \view($badge . '.icon')}}</g>
        @endisset

        @if($value!==false) 
        <text font-family="'Roboto Condensed', sans-serif" font-style="normal" font-size="400px" fill="#000000" paint-order="stroke" font-width="200" stroke="#000000" stroke-width="8px" stroke-linecap="butt" stroke-linejoin="miter" letter-spacing="-12px" text-anchor="middle" alignment-baseline="baseline"  x="256px" y="400px" filter="url(#icon-overlay-shadow)" >{{ $value }}</text>
        @endif

</symbol>
<use href="#{{$concept->type}}-symbol" x="{{$actual_x}}" y="0" width="{{$width}}" height="{{$size}}" class="concept-icon" />