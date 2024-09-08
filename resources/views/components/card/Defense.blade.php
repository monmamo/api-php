<x-card :$cardNumber :$cardName card-type="Defense">
<x-linear-gradient-background start="#000039" end="#0000A1" />
    <g transform="translate(-100,0) scale(1.85546875)">
        <path d="M80 32c-64 256 48 416 176 464 128-48 240-208 176-464-112 32-240 32-352 0z" fill="#00006D"></path>
    </g>

    
        <x-card.rulebox>
            <x-slot:small>Can be played only as a response to an Attack.</x-slot:normal>
            @isset($cardRules)
                <x-slot:normal>{{$cardRules}}</x-slot:normal>
            @endisset
        </x-card.rulebox>
        {{$slot ?? null}}
    
</x-card>
