@push('background')
{{ view('Draw.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Pay it forward even when it isn't cool.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
    Image by freepik
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Alms to the Poor">
    <image x="0" y="0" class="hero" href="@local(A004.jpg)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>To play this card, there must be at least one</x-card.normalrule>
            <x-card.normalrule>opponent with zero or one cards in their hand.</x-card.normalrule>
            <x-card.normalrule>Each of these players can draw 1 card.</x-card.normalrule>
            <x-card.normalrule>Once they have done so,</x-card.normalrule>
            <x-card.normalrule>you may draw up to three cards.</x-card.normalrule>
        </text>
    </x-card.rulebox>

</x-card>
