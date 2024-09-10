@push('flavor-text')
<x-card.flavor-text-line y="500" fill="#000000">Because both adulting and monster battling are hard.</x-card.flavor-text>
@endpush

@push('background')
<image x="0" y="0" href="@local(A028-full.jpg)" source="https://www.freepik.com/free-vector/realistic-cup-black-brewed-coffee-saucer-vector-illustration_23128948.htm" />
@endpush

@push('image-credit')
Image by macrovector on Freepik
@endpush

<x-card card-type="Mana" :$cardNumber card-name="Caffeine" credit-color="#000000" :transparent-name-background="true">
    <x-card.rulebox y="500">
        <x-slot:normal>
    For any attempt to put this Monster to Sleep,
    roll 1d6. (Roll one die for each
    Caffeine card attached to this Monster.)
    If @dieroll(5,6), the Monster remains awake.
    If @dieroll(1,2), discard this card.
    </x-slot:normal>
    </x-card.rulebox>
    
</x-card>
