@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>
    @ai
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Defensive Coordinator">

    <image x="0" y="0" class="hero" href="@local(A-055.png)" />

    
        <x-card.concept.row>
            <x-card.concept.card type="Bystander" x="0" width="190" />
            <x-card.concept.card type="Coach" x="95" width="95" />
            <x-card.concept.card type="Male" x="190" width="190" />
            <x-card.concept.card type="Integrity" x="380" width="230">1d4</x-card.concept>
        </x-card.concept.row>

        <text>
            <x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
            <x-card.smallrule>You must already have a Head Coach on the Battlefield</x-card.smallrule>
            <x-card.smallrule>to put this card on the Battlefield.</x-card.smallrule>
            <x-card.smallrule>You may choose to make this card Female</x-card.smallrule>
            <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
        </text>
        </text>
        You may put the Defense cards you use
        at the bottom of your Library.
        </text>
    

</x-card>
