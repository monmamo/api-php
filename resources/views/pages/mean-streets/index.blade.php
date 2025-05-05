<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


?>
<!DOCTYPE html>
<html lang="en">

<svg class="has-context-menu" width="800" height="800" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">

<style>
    rect.game-square {stroke: black;
        stroke-width: 0.05;
        stroke-linecap:square;
    fill:white;
    fill-opacity:1;
    }
</style>


<defs>
    
    <pattern id="tracks" width="30" height="30" patternTransform="scale(0.067)" patternUnits="userSpaceOnUse"><path fill="none" stroke="black" stroke-linecap="square" d="M27 22.545H3M5.5 0v30M27 7.545H3M24.5 0v30"/></pattern>

</defs>


    <symbol id="base" width="4" height="4" viewBox="0 0 4 4">
        <rect  class="game-square" x="0" y="0" height="4" width="4" />
        
        <g transform="scale(0.006) rotate(135 275 350)" ><path d="M256 19.27L25.637 249.638 19.27 256 32 268.73l6.363-6.367L256 44.727l217.637 217.636L480 268.73 492.73 256l-6.367-6.363zM96 48v107.273l64-64.002V48zm160 20.727l-192 192V486h64V320h96v166h224V260.727zM288 320h96v80h-96z" fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="8"></g>
        </symbol>

        <symbol id="street" width="2" height="3" viewBox="0 0 2 3">
            <rect  class="game-square" x="0" y="0" height="0.5" width="2" />
            <rect  class="game-square" x="0" y="0.5" height="2.5" width="2" />
        </symbol>

        <symbol id="train" width="2" height="2"  viewBox="0 0 512 512">
            <path d="M136.1 37.15L105.4 328.8l26.3 26.3h248.6l26.3-26.3-30.7-291.65H361v44H151v-44zm32.9 0v26h174v-26zm-16.9 60h207.8l18.3 145.95H133.8zm15.8 17.95l-13.7 110h203.6l-13.7-110zm-7.9 158c18.1 0 33 14.9 33 33 0 18.2-14.9 33-33 33s-33-14.8-33-33c0-18.1 14.9-33 33-33zm192 0c18.1 0 33 14.9 33 33 0 18.2-14.9 33-33 33s-33-14.8-33-33c0-18.1 14.9-33 33-33zm-192 18c-8.4 0-15 6.7-15 15 0 8.4 6.6 15 15 15s15-6.6 15-15c0-8.3-6.6-15-15-15zm192 0c-8.4 0-15 6.7-15 15 0 8.4 6.6 15 15 15s15-6.6 15-15c0-8.3-6.6-15-15-15zm-204.5 82L91.6 486.8h46.8l13.5-28.7h208.2l13.5 28.7h46.8l-55.9-113.7h-42.4l6.3 14H183.6l6.3-14zm28 32h161l10.2 23H165.3z" fill="#000000" fill-opacity="1" />
        </symbol>

    <rect x="0" y="0" height="26" width="26" fill="#cccccc" fill-opacity="1" />

    <rect x="12" y="0" width="2" height="26" fill="url(#tracks)" />
    <g transform="rotate(90 13 13)"><rect x="12" y="0" width="2" height="26" fill="url(#tracks)"/></g>

    <use href="#base" x="0" y="0"  />
   <use href="#base" x="26" y="0" transform="rotate(90 26 0)" />
   <use href="#base" x="26" y="26"  transform="rotate(180 26 26)"/>
   <use href="#base" x="0" y="26"  transform="rotate(270 0 26)" />

    @for($n=0; $n<9; $n++)
  <g transform="translate({{$n*2+6}} 3)"><use href="#street" transform="rotate(-180)" /></g>
  <g transform="translate(23 {{$n*2+6}})"><use href="#street"  transform="rotate(-90)" /></g>
  <g transform="translate({{20-$n*2}} 23)"><use href="#street" transform="rotate(0)" /></g>
  <g transform="translate(3 {{20-$n*2}})"><use href="#street"  transform="rotate(90)" /></g>
@endfor

<rect  class="game-square" x="11" y="11" height="4" width="4" />

{{-- @for($n=0; $n<9; $n++) --}}
<use href="#train" x="12" y="24" />
<use href="#train" x="12" y="24" transform="rotate(90 13 13)" />
<use href="#train"  x="12" y="24"  transform="rotate(180 13 13)"/>
<use href="#train"  x="12" y="24" transform="rotate(270 13 13)" />

</svg>

<x-svg-context-menu />

</html>