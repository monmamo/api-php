@push('background')
{{ view('Environment.background') }}
@endpush

<x-card card-type="Environment" :$cardNumber card-name="From Bad to Worse" >

    <x-card.rulebox>
        <x-card.concept-card type="Environment" /> 
        <text y="80" filter="url(#solid)">  

<x-card.normalrule>Discard this card once there are no longer</x-card.normalrule>
<x-card.normalrule>any Bane cards attached to any Monsters</x-card.normalrule>
<x-card.normalrule>on the Battlefield.</x-card.normalrule>
<x-card.normalrule>The redemptive properties of the Bane cards </x-card.normalrule>
<x-card.normalrule>attached to Monsters have no effect.</x-card.normalrule>
</text>
</x-card.rulebox>
</x-card>