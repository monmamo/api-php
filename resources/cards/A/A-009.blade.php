@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
    Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Sparking">
    <g class="svg-hero"><?= view('Energos.icon') ?></g>
    
        <x-card.concept.staticon type="Trait" x="530" />
        <text x="50%" y="620" width="100%" height="auto" filter="url(#solid)">
            <x-card.normalrule>Requires Energos.</x-card.normalrule>
            <x-card.normalrule>When this Monster attacks or defends,</x-card.normalrule>
            <x-card.normalrule>you may have this Monster discard any</x-card.normalrule>
            <x-card.normalrule>number of Electricity cards.</x-card.normalrule>
            <x-card.normalrule>For each Electricity card discarded,</x-card.normalrule>
            <x-card.normalrule>the attacking or defending Monster</x-card.normalrule>
            <x-card.normalrule>takes 1d6 damage.</x-card.normalrule>
        </text>
    

</x-card>
