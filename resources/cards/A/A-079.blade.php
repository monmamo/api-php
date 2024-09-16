@push('background') 
{{ view('Drone.background') }}
@endpush

<x-card :$cardNumber card-name="Rescue Drone" >
    <x-card.rulebox>
<x-card.concept-card type="Drone" />
<x-card.concept.row>
    <x-card.concept.card  type="Item">Item</x-card.concept.card >
        <x-card.concept.card  type="DamageCapacity" index="1">5</x-card.concept.card >    
    <x-card.concept.card type="Size" x="0" width="190" >25</x-card.concept.card>
    <x-card.concept.card type="Speed" x="190" width="190" >4</x-card.concept.card>
</x-card.concept.row>
<text y="140" filter="url(#solid)">
<x-card.normalrule>Choose one of your Monsters on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Shuffle that Monster, all cards attached to it,</x-card.normalrule>
<x-card.normalrule>and Rescue Drone into your Library.</x-card.normalrule>
</text>
</x-card.rulebox>
</x-card>