@push('flavor-text')
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card concepts="Draw" :$cardNumber card-name="Cowardice">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
        <x-slot:normal>
        Attack -3. Defense -3.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>