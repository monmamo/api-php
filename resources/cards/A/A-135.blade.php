<x-card.Draw :$cardNumber card-name="Investment">

<x-slot:card-rules>
</x-slot:card-rules>
</x-card.Draw>
<?php
 [
Put any number of cards facedown on the Battlefield.
At the Resolution Phase of this turn,
draw 1d6-1 cards for each facedown card.
Discard the facedown cards.
    ],
    "image": {
        <image x="0" y="0" class="hero" href="@local(A135.jpg)" />
        @push('image-credit')
Image by photoroyalty on Freepik
@endpush
{{-- https://www.freepik.com/free-vector/time-is-money-background_1014317.htm --}}
    },
    @push('flavor-text')
<x-card.flavor-text-line>Past performance is not indicative of future results.</x-card.flavor-text-line>
@endpush
}