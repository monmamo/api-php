@push('background')
{{ view('Draw.background') }}
@endpush

{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Caitlin_(Plasma_Blast_78) --}}

<x-card :$cardNumber card-name="Sleight of Hand">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>Put any number of cards from your hand</x-card.normalrule>
            <x-card.normalrule>on the bottom of your Library in any order.</x-card.normalrule>
            <x-card.normalrule>Then, draw a card for each card you put</x-card.normalrule>
            <x-card.normalrule>on the bottom of your Library.</x-card.normalrule>
        </text>
    </x-card.rulebox>

</x-card>
