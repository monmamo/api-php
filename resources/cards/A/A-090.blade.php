@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Adobe Stock #756008424</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Five-Finger Discount">
    <image x="0" y="0" class="hero" href="@local(hero/AdobeStock_756008424.jpeg)"/>

    <x-card.concept.staticon type="Draw" x="530" /> 
    <x-card.concept.staticon type="Criminal" x="530" /> 
    <text y="150" filter="url(#solid)">
<x-card.normalrule>Play a Vendor card.</x-card.normalrule>
<x-card.normalrule>You may ignore any requirement</x-card.normalrule>
<x-card.normalrule>to discard cards.</x-card.normalrule>
    </text>

</x-card>