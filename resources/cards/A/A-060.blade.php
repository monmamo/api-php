<x-card.image-credit>
<x-card.normalrule>Flamethrower the placeholder image.</x-card.normalrule>
</x-card.image-credit>
@endpush

@push('background')
{{ view('Attack.background') }}
@endpush

<x-card :$cardNumber card-name="Flamethrower Attack" >

    <image x="0" y="0" class="hero" href="@local(hero/flamethrower.jpeg)" />

    <x-card.concept.staticon type="Attack" x="530" />
<text>
<x-card.smallrule>Requires Pyros and Level 40.</x-card.smallrule>
<x-card.normalrule>Discard any number of Fire cards </x-card.normalrule>
<x-card.normalrule>attached to the Monster using this attack.</x-card.normalrule>
<x-card.normalrule>Does 26d damage for each Fire card discarded.</x-card.normalrule>
    </text>

</x-card.Attack>