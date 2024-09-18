@push('background')
{{ view('Vendor.background') }}

<x-card.image-credit>
    Image by teravector on Freepik
</x-card.image-credit>

<x-card.flavortext>
    <x-card.flavortext.line>Expect more. Live better. Simplify life. Get more done.</x-card.flavortext.line>
</x-card.flavortext>

@endpush


<x-card :$cardNumber card-name="Big-Box Store">
    <image x="0" y="0" class="hero" href="@local(A-014.jpg)" source="https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm" />

    
        <x-card.concept.staticon type="Vendor" x="466" />
        <x-card.concept.staticon type="Integrity" value="1d4" />

            <text y="80" filter="url(#solid)">
                <x-card.normalrule>Discard three cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Search your Library for two Item cards.</x-card.normalrule>
                <x-card.normalrule>Reveal them, then put them in your hand.</x-card.normalrule>
                <x-card.normalrule>Shuffle your library.</x-card.normalrule>
            </text>

    
</x-card>
