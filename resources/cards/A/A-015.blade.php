@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Berserk">

    <x-card.rulebox>
        <x-card.concept-card type="Trait" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>Speed +2 when remaining HP drops below half.</x-card.normalrule>
        </text>

</x-card>
