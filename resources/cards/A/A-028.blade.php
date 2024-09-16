<x-card.flavortext>
<x-card.flavortext.line y="450" fill="#000000">Because both adulting and monster battling are hard.</x-card.flavor-text>
</x-card.flavortext>

@push('background')
<image x="0" y="0" href="@local(A028-full.jpg)" source="https://www.freepik.com/free-vector/realistic-cup-black-brewed-coffee-saucer-vector-illustration_23128948.htm" />
@endpush

<x-card.image-credit>
Image by macrovector on Freepik
</x-card.image-credit>
@endpush

<x-card 
    credit-color="#000000" 
    card-name="Caffeine" 
    :$cardNumber 
    :titlebox-opacity="0.25"
>
    <x-card.rulebox y="500">
        <x-card.concept-card type="Mana" /> 
        <x-slot:normal>
        For any attempt to put this Monster to Sleep,
        roll 1d6. (Roll one die for each
        Caffeine card attached to this Monster.)
        If @dieroll(5,6), the Monster remains awake.
        If @dieroll(1,2), discard this card.
        </x-slot:normal>
    </x-card.rulebox>
</x-card>
