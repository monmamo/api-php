@push('background')
{{ view('Mobster.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Nice monster team you got there.</x-card.flavortext.line>
    <x-card.flavortext.line>Would be a shame if something happened to it.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>Image by fxquadro on Freepik</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Neighborhood \" Protection\"">
    <image x="0" y="0" class="hero" href="@local(A186.jpg)" />


    
        <x-card.concept.staticon type="Mobster" x="530" />
        <x-card.concept.staticon type="Integrity" x="530" >1d4</x-card.concern-card>

            <text y="500" filter="url(#solid)">
                <x-card.smallrule>No limit on battlefield</x-card.smallrule>
            </text>
            
            <x-card.phaserule type="Upkeep" y="170" height="130">
                <text>
                    <x-card.normalrule>Limit 1 on Battlefield among all players</x-card.normalrule>
                    <x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
                    <x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
                    <x-card.normalrule>or discard two of their own cards.</x-card.normalrule>
                </text>
            </x-card.phaserule>

    
</x-card>
