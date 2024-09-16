<x-card.image-credit>
Flamethrower the placeholder image.
</x-card.image-credit>
@endpush

@push('background')
{{ view('Attack.background') }}
@endpush

<x-card :$cardNumber card-name="Flamethrower Attack" >

    <image x="0" y="0" class="hero" href="@local(hero/flamethrower.jpeg)" />
<x-card.rulebox>
    <x-card.concept-card type="Attack" />
<x-slot:normal>
    Requires Pyros and Level 40.
    Discard any number of Fire cards 
    attached to the Monster using this attack.
    Does 26d damage for each Fire card discarded.
    </x-slot:normal>
</x-card.rulebox>
</x-card.Attack>