@push('flavor-text')
<x-card.flavor-text-line>FLAVOR_TEXT</x-card.flavor-text-line>
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Fabric Allergy">
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    <x-card.rulebox>
        <x-slot:normal>
            Resolution phase: If this Monster is wearing a Garment, it takes 1d4 damage.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>