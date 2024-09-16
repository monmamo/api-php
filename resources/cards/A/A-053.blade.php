@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Brutality">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>When this Monster attacks,</x-card.normalrule>
<x-card.normalrule>perform two rolls for every roll check.</x-card.normalrule>
    </text>
</x-card.phaserule>
</x-card.rulebox>
</x-card>
