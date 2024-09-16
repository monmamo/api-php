@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by amantaka from Noun Project</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Equalizer 3">
<x-card.concept-card type="Draw" /> 
    <g transform="translate(100 75) scale(0.531 0.425)" ><path d="M9 756l0 -262 828 0 0 262 -828 0zm0 -403l0 -263 828 0 0 263 -828 0z" fill="#ffffff" fill-opacity="50%"/></g><text x="50%" y="360" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >3</text>
{{-- https://thenounproject.com/browse/icons/term/equals/ _original_width:847 _original_height:1058.75 --}}

<x-card.rulebox>
<x-slot:normal>
<x-card.normalrule>Choose an opponent.</x-card.normalrule>
<x-card.normalrule>Draw cards until you have the same number</x-card.normalrule>
<x-card.normalrule>of cards in your hand as that opponent.</x-card.normalrule>
        </x-slot:normal>
</x-card.rulebox>
</x-card>
