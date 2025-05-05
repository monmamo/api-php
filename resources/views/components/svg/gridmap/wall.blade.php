@props(['x','y','dx'=>0,'dy'=>0,'door'=>false])

<line class="wall" x1="{{$x}}" y1="{{$y}}" x2="{{$x+$dx}}" y2="{{$y+$dy}}"/>
@if($door !== false && is_numeric($door))
<line class="door" x1="{{$x+$dx*($door+0.3)}}"  x2="{{$x+$dx*($door+0.7)}}" y1="{{$y+$dy*($door+0.3)}}" y2="{{$y+$dy*($door+0.7)}}" />
@endif
