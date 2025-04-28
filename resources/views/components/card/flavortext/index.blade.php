@props(['y'=>560,'color'=>'#ffffff'])
<text x="50%" y="{{$y}}" width="100%" height="auto" class="flavor" fill="{{$color}}" text-anchor="middle" alignment-baseline="baseline">
    {{$slot}}
</text>
