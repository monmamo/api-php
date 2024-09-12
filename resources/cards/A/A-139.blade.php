@push('image-credit')
Image by ShutterStock #2389392699 by AnhSilhouetteArt
@endpush

@push('flavor-text')
<x-card.flavor-text-line>It's a female monster.</x-card.flavor-text-line>
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Karma">
    <image x="0" y="0" class="hero" href="@local(A139.jpg)" />

    <x-card.rulebox>
        <x-slot:normal>
Each player adds up the remaining health
on his Monsters. The player with the highest total
shuffles his hand into his Library.
</x-slot:normal>
</x-card.rulebox>
</x-card>
