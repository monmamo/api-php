@props(['name' => null])
@php
    $name ??= $slot->toHtml();
@endphp
{{-- data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" --}}
<a href="/concepts/{{$name}}" ><x-icons.inline.concept :concept="$name" size="30" /> {{$slot}}</a>
