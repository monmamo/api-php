@push('background')
{{-- https://game-icons.net/1x1/delapouite/garlic.html --}}
<image x="0" y="0" href="@local(fullsize/garlic.jpg)"  />
@endpush

@push('image-credit')
Image by brgfx on Freepik
@endpush

@push('flavor-text')
<x-card.flavor-text-line y="425" fill="#000000">A clove a day keeps the doctor away.</x-card.flavor-text>
<x-card.flavor-text-line y="450" fill="#000000">(And everyone else.)</x-card.flavor-text>
@endpush





<x-card
    card-type="Mana"  
    :$cardNumber 
    card-name="Garlic" 
    credit-color="#000000" 
    :titlebox-opacity="0.25"
>
    <x-card.rulebox y="515">
        <x-slot:normal>
Roll 1d6. The effect will last for
that many turns, including this one.
Resolution phase: Reduce Attack damage
done by all other Monsters by 3.
</x-slot:normal>
</x-card.rulebox>

</x-card>
