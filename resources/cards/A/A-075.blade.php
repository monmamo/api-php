<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Bystander.background') }}
@endpush



<x-card :$cardNumber card-name="Sheriff">
    <image x="0" y="0" class="hero" href="@local(A245.png)" />

<x-card.rulebox>
    <x-card.concept.row>
    <x-card.concept.card type="Bystander" x="0" width="380" />
    <x-card.concept.card type="Integrity" x="380" width="230" >2d6</x-card.concept>
    </x-card.concept.row>

    <text y="80" filter="url(#solid)">        
<x-card.smallrule>Limit 1 on Battlefield among all players.</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Male or Female </x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>Discard all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>No more Mobster or Criminal cards can be played </x-card.normalrule>
<x-card.normalrule>while this card is on the Battlefield.</x-card.normalrule>
</text>
</x-card.rulebox>

</x-card>
