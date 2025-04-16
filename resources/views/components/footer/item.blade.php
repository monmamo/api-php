@props(['spec'])

@switch(count($spec))
@case(1)
<li class="mb-2"><a href="/{{ $spec[0] }}">{{ __($spec[0]) }}</a></li>
        @break
 
    @case(2)
    <li class="mb-2"><a href="{{ $spec[0] }}">{{ $spec[1] }}</a></li>
            @break
    

@endswitch