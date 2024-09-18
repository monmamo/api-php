@push('background')
{{ view('Bane.background') }}
@endpush

<x-card :$cardNumber card-name="Uncontrollable Empathy">

    <x-card.concept.staticon type="Bane" x="530" /> 

    <use href="#limit-1-per-monster" y="500"  />
    
            <x-card.phaserule type="Resolution" height="135">
                <text >                
    <x-card.normalrule>Reduce Attack damage by Size/2.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>
