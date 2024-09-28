@push('background') 
{{ view('Draw.background') }}

'concepts' => [        'Draw'    ],

'flavor-text' => [
'Your favorite monster sports club had a great day'
'on the field. Let's celebrate!'
],

<x-card.image-credit>Image by freepic.diller on Freepik</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Round for the House">
    <image x="0" y="0" class="hero" href="@local(A231.jpg)" />


<text y="100" filter="url(#solid)">
<x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.normalrule>Then you may take another Draw phase.</x-card.normalrule>
</text>

</x-card>
