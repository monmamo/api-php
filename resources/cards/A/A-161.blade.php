
@push('background')
{{ view('Bystander.background') }}
@endpush


<x-card :$cardNumber card-name="Mascot">

    <x-card.rulebox>
        <x-card.concept.row>
        <x-card.concept.card type="Bystander" x="0" width="380" />
        <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
        </x-card.concept.row>
        
<x-card.smallrule>Each player may have one Mascot on the Battlefield.</x-card.smallrule>

<x-card.phaserule type="Resolution" y="135" height="100">
    <text >
<x-card.normalrule>Your Monster's attacks do an additional 1d4 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card.rulebox>
</x-card>