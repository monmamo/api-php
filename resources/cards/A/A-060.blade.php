@push('image-credit')
Flamethrower the placeholder image.
@endpush

<x-card.Attack :$cardNumber card-name="Flamethrower Attack" >
    <image x="0" y="0" class="hero" href="@local(hero/flamethrower.jpeg)" />
<x-slot:card-rules>
    Requires Pyros and Level 40.
    Discard any number of Fire cards 
    attached to the Monster using this attack.
    Does 26d damage for each Fire card discarded.
    </x-slot:card-rules>
</x-card.Attack>