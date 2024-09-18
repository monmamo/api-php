@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Absorb Water">

    <g class="svg-hero"><?= view('Aquos.icon') ?></g>

    
    <x-card.concept.staticon type="Trait" x="530" /> 

    <text y="80" filter="url(#solid)">
        <x-card.smallrule>Requires Aquos.</x-card.smallrule>
<x-card.normalrule>If hit by an Attack that results in the attacker</x-card.normalrule>
<x-card.normalrule>discarding Water, attach those cards to</x-card.normalrule>
<x-card.normalrule>this Monster.</x-card.normalrule>
<x-card.smallrule>When those cards are discarded, they go </x-card.smallrule>
<x-card.smallrule>to the Discard of the player who owns them.</x-card.smallrule>
</text>

</x-card>
