<x-card.Draw :$cardNumber card-name="<?php">

</x-card.Draw>
    @push('flavor-text')
<x-card.flavor-text-line>It's a female monster.</x-card.flavor-text-line>
@endpush,
    <x-slot:card-rules>

</x-slot:card-rules>
 [
Each player adds up the remaining health
on his Monsters. The player with the highest total
shuffles his hand into his Library and draws 3 cards.
    ],
    "image": {
        <image x="0" y="0" class="hero" href="@local(A139.jpg)" />
        @push('image-credit')
Image by ShutterStock #2389392699 by AnhSilhouetteArt
@endpush
source": "
    },
name": "Karma
}