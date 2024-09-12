@push('flavor-text')
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Trait" :$cardNumber card-name="Herbal Scent">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
    <x-slot:small>
Requires Floros.
    </x-slot:small>
        <x-slot:normal>
            Resolution phase (all players):
            Before resolving attacks, remove 1d4 damage from each Monster on the Battlefield.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>