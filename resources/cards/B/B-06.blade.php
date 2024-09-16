<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Permanent Blindness">
<x-card.concept-card type="Draw" /> 
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