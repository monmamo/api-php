@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Intercept">

<x-card.concept.staticon type="Defense" x="530" />


<text y="500" filter="url(#solid)">
    <x-card.smallrule>A Monster may use this Defense if it is not subject to an Attack.</x-card.smallrule>
<x-card.normalrule>Choose an opposing Monster that is </x-card.normalrule>
<x-card.normalrule>attacking another Monster. </x-card.normalrule>
<x-card.normalrule>If this Monster’s Speed is higher, </x-card.normalrule>
<x-card.normalrule>this Monster takes the damage </x-card.normalrule>
<x-card.normalrule>that Attack would have done.</x-card.normalrule>
        </text>

    </x-card.Defense>
