@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Benevolence">

<x-card.concept.staticon type="Trait" x="530" />
<text>
<x-card.normalrule>Damage done to defender: -1d6</x-card.normalrule>
<x-card.normalrule>Damage prevented: +1d6</x-card.normalrule>
    </text>

</x-card>
