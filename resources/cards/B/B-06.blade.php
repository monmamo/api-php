@push('flavor-text')
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Permanent Blindness">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
    <x-slot:small>
        Limit 1 per Monster.
    </x-slot:small>
        <x-slot:normal>
        You may play this Bane only with an Attack.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>