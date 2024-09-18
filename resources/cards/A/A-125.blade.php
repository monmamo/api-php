@push('background')
{{ view('Catastrophe.background') }}
@endpush

<x-card :$cardNumber card-name="Hurricane">

<x-card.concept.staticon type="Catastrophe" x="530" />
<text>
    <x-card.normalrule>This card can be played only if Summer or Autumn is on the Battlefield.</x-card.normalrule>
    <x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
    <x-card.normalrule>If the Place card on the Battlefield is a Venue or Facility card, discard it.</x-card.normalrule>
    <x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
    <x-card.normalrule>Discard all Item cards on the Battlefield that are not attached to Monsters.</x-card.normalrule>
    <x-card.normalrule>Shuffle all Item cards attached to Monsters into the Library.</x-card.normalrule>
    </text>

</x-card.Catastrophe>
<?php
