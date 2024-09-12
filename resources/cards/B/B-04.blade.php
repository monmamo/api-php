@push('flavor-text')
<x-card.flavor-text-line>FLAVOR_TEXT</x-card.flavor-text-line>
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Sunken Eye">
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    <x-card.rulebox>
        <x-slot:normal>
            You may play this Bane only with an Attack.
            Limit 2 per Monster.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>