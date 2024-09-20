@push('background')
{{ view('Draw.background') }}

<x-card.flavortext>
    <x-card.flavortext.line></x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
    
</x-card.image-credit>
@endpush

{{-- inspiration:: Erika's Hospitality PTCG card https://bulbapedia.bulbagarden.net/wiki/Erika%27s_Hospitality_(Team_Up_174) --}}

<x-card :$cardNumber card-name="Hospitality">
    <image x="0" y="0" class="hero" href="@local(TODO.png)" />

    
        <x-card.concept.staticon type="Draw" :dx="1" />

        <text y="500" filter="url(#solid)">
<x-card.smallrule>You can play this card only if you have </x-card.smallrule>
    <x-card.smallrule>4 or fewer other cards in your hand.</x-card.smallrule>
    <x-card.normalrule>Draw a card for each opposing Monster</x-card.normalrule>
    <x-card.normalrule>on the Battlefield.</x-card.normalrule>
        </text>
    

</x-card>
