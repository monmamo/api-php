@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Shuffle and Draw 3">
<text >
    <tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#549800" >3</tspan>
    </text>

<x-card.rulebox>
<x-card.concept-card type="Draw" />
<x-slot:normal>
<x-card.normalrule>Shuffle your hand into your Library.</x-card.normalrule>
<x-card.normalrule>Then draw 3 cards.</x-card.normalrule>
    </x-slot:normal>
</x-card.rulebox>
</x-card>