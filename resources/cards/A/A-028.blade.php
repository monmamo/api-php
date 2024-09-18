@push('background')
<image x="0" y="0" href="@local(A028-full.jpg)" source="https://www.freepik.com/free-vector/realistic-cup-black-brewed-coffee-saucer-vector-illustration_23128948.htm" />

<x-card.flavortext>
    <x-card.flavortext.line y="450" fill="#000000">Because both adulting and monster battling are hard.</x-card.flavor-text>
</x-card.flavortext>

<x-card.image-credit>
    Image by macrovector on Freepik
</x-card.image-credit>
@endpush

<x-card
    credit-color="#000000"
    card-name="Caffeine"
    :$cardNumber
    :titlebox-opacity="0.25">
    <x-card.rulebox y="500">
        <x-card.concept.staticon type="Mana" x="530" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>For any attempt to put this Monster to Sleep,</x-card.normalrule>
            <x-card.normalrule>roll 1d6. (Roll one die for each</x-card.normalrule>
            <x-card.normalrule>Caffeine card attached to this Monster.)</x-card.normalrule>
            <x-card.normalrule>If @dieroll(5,6), the Monster remains awake.</x-card.normalrule>
            <x-card.normalrule>If @dieroll(1,2), discard this card.</x-card.normalrule>
        </text>
    
</x-card>
