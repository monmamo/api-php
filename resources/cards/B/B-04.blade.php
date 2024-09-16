<x-card.flavortext>
<x-card.flavortext.line>FLAVOR_TEXT</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Sunken Eye">
<x-card.concept-card type="Draw" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    <x-card.rulebox>
        <x-slot:normal>
            You may play this Bane only with an Attack.
            Limit 2 per Monster.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>