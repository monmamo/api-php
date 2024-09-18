@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by amantaka from Noun Project</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Equalizer 1">
<x-card.concept.staticon type="Draw" x="530" /> 
    <g transform="translate(100 75) scale(0.531 0.425)" ><path d="M9 756l0 -262 828 0 0 262 -828 0zm0 -403l0 -263 828 0 0 263 -828 0z" fill="#ffffff" fill-opacity="50%"/></g><text x="50%" y="360" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >1</text>
{{-- https://thenounproject.com/browse/icons/term/equals/ _original_width:847 _original_height:1058.75 --}}


<text>
<x-card.normalrule>All players shuffle their hand into</x-card.normalrule>
<x-card.normalrule>their deck and draw up to 4 cards.</x-card.normalrule>
    </text>

</x-card>
