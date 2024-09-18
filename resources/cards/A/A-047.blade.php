@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Biolure">

<x-card.concept.staticon type="Trait" x="530" />
<text>
<x-card.normalrule>When not your turn, roll 1d6 for each Monster </x-card.normalrule>
<x-card.normalrule>on the Battlefield until you get @dieroll(5) or @dieroll(6). </x-card.normalrule>
<x-card.normalrule>The selected Monster cannot attack </x-card.normalrule>
<x-card.normalrule>any other Monster on this turn.</x-card.normalrule>
</text>

</x-card>
