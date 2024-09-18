@push('background') 
{{ view('Draw.background') }}

<x-card.flavortext>
<x-card.flavortext.line>Your favorite monster sports club had a great day</x-card.flavortext.line>
<x-card.flavortext.line>on the field. Let's celebrate!</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>Image by freepic.diller on Freepik</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Round for the House">
    <image x="0" y="0" class="hero" href="@local(A231.jpg)" />

<x-card.concept.staticon type="Draw" x="530" />
<text y="100" filter="url(#solid)">
<x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.normalrule>Then you may take another Draw phase.</x-card.normalrule>
</text>

</x-card>
