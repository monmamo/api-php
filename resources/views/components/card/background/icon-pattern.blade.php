@props(['id'])
<defs>
    <pattern id="{{$id}}-icon-pattern" width="512" height="512" patternTransform="scale(0.29296875)" patternUnits="userSpaceOnUse">
        {{$slot}}
    </pattern>
</defs>
<x-card.background fill="url(#{{$id}}-icon-pattern)" />
