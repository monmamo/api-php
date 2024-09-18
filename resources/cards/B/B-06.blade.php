<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Permanent Blindness">
<x-card.concept.staticon type="Draw" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <x-slot:small>
        Limit 1 per Monster.
    </x-slot:small>
        <text>
        You may play this Bane only with an Attack.
    </text>
    

</x-card>