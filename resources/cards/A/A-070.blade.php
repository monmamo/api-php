@push('background')
{{ view('Draw.background') }}
@endpush

'concepts' => [        'Draw'    ],

<x-card :$cardNumber card-name="Welcome to Flavortext">

<text>
<x-card.normalrule>Search your Library for a card with flavor text.</x-card.normalrule>
<x-card.normalrule>Put it in your hand. Shuffle your Library.</x-card.normalrule>
    </text>

</x-card>
