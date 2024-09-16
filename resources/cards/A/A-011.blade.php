@push('background')
{{ view('Environment.background') }}
@endpush

<x-card :$cardNumber card-name="Flash of Lightning">
    <g class="svg-hero"><?= view('Energos.icon') ?></g>

    <x-card.rulebox>
        <x-card.concept-card type="Skill" />
        <x-slot:small>Requires Energos.</x-slot:small>
        <text>
            <x-card.normalrule>Discard all Electricity cards attached to</x-card.normalrule>
            <x-card.normalrule>this Monster. Each other Monster on the Battlefield takes</x-card.normalrule>
            <x-card.normalrule>1d6 damage for each Electricity card discarded.</x-card.normalrule>
            <x-card.normalrule>Only this Monster may attack until & through</x-card.normalrule>
            <x-card.normalrule>this player’s next turn.</x-card.normalrule>
        </text>
    </x-card.rulebox>

    </x-card.>
