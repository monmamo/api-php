@push('background')
{{ view('Bane.background') }}
@endpush

<x-card :$cardNumber card-name="Uncontrollable Empathy">

    <x-card.concept.staticon type="Bane" x="530" /> 

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >
    
            <x-card.phaserule type="Resolution" height="135">
                <text >                
    <x-card.normalrule>Reduce Attack damage by Size/2.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>
