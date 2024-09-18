@push('background')
{{ view('Bystander.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Touch is the best medicine.</x-card.flavortext.line>    
</x-card.flavor-text>
@endpush


<x-card :$cardNumber card-name="Masseuse">

    
        <x-card.concept.row>
        <x-card.concept.card type="Bystander" x="0" width="130" />
        <x-card.concept.card type="Female" x="130" width="250" />
        <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
        </x-card.concept.row>
<x-card.smallrule>A player may have one Masseuse on the Battlefield.</x-card.smallrule>

<x-card.phaserule type="Resolution" y="135" height="100">
    <text >
<x-card.normalrule>After all attacks & skills</x-card.normalrule>
<x-card.normalrule>are resolved, remove 4 damage from each</x-card.normalrule>
<x-card.normalrule>of your Monsters that is not Knocked Out.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>