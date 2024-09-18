@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Slow Start">

<x-card.concept.staticon type="Trait" x="530" />
<x-card.smallrule>This card can be attached to a Monster only during the Setup Phase.</x-card.smallrule>
<x-card.normalrule>During the first round of turns, </x-card.normalrule>
<x-card.normalrule>this Monster's Speed is halved </x-card.normalrule>
<x-card.normalrule>and Attacks do half as much damage.</x-card.normalrule>
<x-card.normalrule>During subsequent turns, Speed +2 </x-card.normalrule>
<x-card.normalrule>and Attacks do 2 additional damage.</x-card.normalrule>


</x-card>
