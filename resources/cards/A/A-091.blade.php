@push('image-credit')
@ai
@endpush

@push('background')
<image x="0" y="0" href="@local(A-091-full.png)"/>
@endpush

@push('flavor-text')
<x-card.flavor-text-line>He builds the hugest venues. Yuge ones.</x-card.flavor-text-line>
@endpush

<x-card card-type="Upkeep" :$cardNumber card-name="Flamboyant Mogul" >
    <x-card.concept type="Integrity">1d4</x-card.concern>
        <x-card.concept type="Male" index="1">Male</x-card.concern>
            <x-card.rulebox>
                <x-slot:normal>
            Discard five cards from your Hand
    to play a Venue card from your Hand.
</x-slot:normal>
</x-card.rulebox>
</x-card>