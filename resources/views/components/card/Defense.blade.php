<x-card :$cardNumber :$cardName card-type="Defense">
<x-linear-gradient-background start="#284870" end="#4890E0" />
    <g transform="translate(-100,0) scale(1.85546875)">
        <path d="M80 32c-64 256 48 416 176 464 128-48 240-208 176-464-112 32-240 32-352 0z" fill="#386CA8"></path>
    </g>

    <x-card.bodybox>
        <x-card.card-type-rule>Can be played only as a response to an Attack.</x-card.card-type-rule>

        {{$slot ?? null}}


    </x-card.bodybox>
</x-card>
