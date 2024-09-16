@push('background')
{{-- https://game-icons.net/1x1/delapouite/garlic.html --}}
<image x="0" y="0" href="@local(fullsize/garlic.jpg)"  />

<x-card.image-credit>
<x-card.normalrule>Image by brgfx on Freepik</x-card.normalrule>
</x-card.image-credit>

<x-card.flavortext>
<x-card.flavortext.line y="425" fill="#000000">A clove a day keeps the doctor away.</x-card.flavor-text>
<x-card.flavortext.line y="450" fill="#000000">(And everyone else.)</x-card.flavor-text>
</x-card.flavortext>
@endpush

<x-card
    card-type="Mana"  
    :$cardNumber 
    card-name="Garlic" 
    credit-color="#000000" 
    :titlebox-opacity="0.25"
>
    <x-card.rulebox y="515">

<x-card.smallrule>The effect will last for</x-card.smallrule>
<x-card.smallrule>1d6 turns, including this one.</x-card.smallrule>
<x-card.smallrule>After that many turns, discard this card.</x-card.smallrule>
<x-card.phaserule type="Resolution" height="135">
    <text >
<x-card.normalrule>Reduce Attack damage</x-card.normalrule>
<x-card.normalrule>done by all other Monsters by 3.</x-card.normalrule>
            </text>
        </x-card.phaserule>

    </x-card.rulebox>

</x-card>
