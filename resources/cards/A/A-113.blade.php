@push('background')
{{ view('Venue.background') }}
<x-card.image-credit>Shutterstock #2348597925</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Creative Academy" >

<x-card.concept.staticon type="Venue" x="530" />

<x-card.phaserule type="Upkeep" height="100">
    <text >
<x-card.normalrule>You may attach up to three Mana</x-card.normalrule>
<x-card.normalrule>cards per Monster (instead of just one).</x-card.normalrule>
</text>
</x-card.phaserule>

            
</x-card>
