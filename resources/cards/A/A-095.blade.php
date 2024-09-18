@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Focus">
    
<x-card.concept.staticon type="Trait" x="530" /> 
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>When attacked, prevent 2d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>