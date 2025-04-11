@props(['type','y'=>10,'repeat'=>false,'badge'=>null])

<g y="{{$y}}" class="concept-icon" fill="#000000" fill-opacity="1">
    {{ \App\Concept::make($type)->icon() }}
</g>
@isset($badge)
<g class="concept-icon-badge" fill="#000000" fill-opacity="1" filter="url(#icon-overlay-shadow)">
    {{ view($badge.'.icon') }}
</g>
@endisset
