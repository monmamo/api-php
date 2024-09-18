<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Catastrophe.background') }}
@endpush

<x-card :$cardNumber card-name="Volcanic Eruption">
<x-card.concept.staticon type="Catastrophe" x="530" />
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <x-slot:small>

    </x-slot:small>
        <text>
May be played only when the Place on the Battlefield is a Volcano.
Each Monster on the Battlefield that does not have some sort of flying ability immediately takes 2 damage.
Each player discards 3 cards from the top of his Library.
Discard all Mobster and Bystander cards on the Battlefield.
    </text>
    

</x-card>