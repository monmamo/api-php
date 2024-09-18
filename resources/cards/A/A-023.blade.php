@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Cunning">


    <x-card.concept.staticon type="Trait" x="530" /> 
    <x-card.phaserule type="Upkeep" y="170" height="130">
        <text >
    <x-card.normalrule>Choose a Library.</x-card.normalrule>
<x-card.normalrule>Look at the top 4 cards of that Library</x-card.normalrule>
<x-card.normalrule>without rearranging them.</x-card.normalrule>
<x-card.normalrule>Then you may shuffle that Library.</x-card.normalrule>
</text>
</x-card.phaserule>

            
</x-card>
