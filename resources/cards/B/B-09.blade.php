@push('flavor-text')
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card.Catastrophe :$cardNumber card-name="Volcanic Eruption">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
    <x-slot:small>

    </x-slot:small>
        <x-slot:normal>
May be played only when the Place in play is a Volcano.
Each Monster in play that does not have some sort of flying ability immediately takes 2 damage.
Each player discards 3 cards from the top of his Library.
Discard all Mobster and Bystander cards in play.
    </x-slot:normal>
    </x-card.rulebox>

</x-card.Catastrophe>