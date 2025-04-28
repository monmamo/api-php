@props(['name' => null])
{{-- data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" --}}
<a href="/concepts/{{$name??$slot}}" ><x-icons.inline.concept size="30">{{$name??$slot}}</x-icons.inline.concept> {{$slot}}</a>
