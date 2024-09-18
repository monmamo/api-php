@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Stickiness">

<x-card.concept.staticon type="Trait" x="530" />
<text>
<x-card.normalrule>Attempt to remove an Item from this Monster</x-card.normalrule>
<x-card.normalrule>succeeds only if 1d6 equals @dieroll(5,6).</x-card.normalrule>
</text>

</x-card>
