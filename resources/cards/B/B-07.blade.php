<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Cowardice">
<x-card.concept-card type="Draw" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
        <x-slot:normal>
        Attack -3. Defense -3.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>