@push('background')
<x-linear-gradient-background start="#004000" end="#7c432f" />
@endpush

<x-card card-type="Environment" :$cardNumber card-name="From Bad to Worse" >

    <x-card.rulebox>
        <x-slot:small>Discard this card once there are no longer
            any Bane cards attached to any Monsters
            on the Battlefield.</x-slot:small>
        <x-slot:normal>The redemptive properties of the Bane cards 
            attached to Monsters have no effect.</x-slot:normal>
    </x-card.rulebox>
   
</x-card>