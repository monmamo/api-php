@push('flavor-text')
<x-card.flavor-text-line>Excessive sweating.</x-card.flavor-text-line>
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Hyperhidrosis">
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    <x-card.rulebox>
        <x-slot:normal>
TODO
    </x-slot:normal>
    </x-card.rulebox>

</x-card>