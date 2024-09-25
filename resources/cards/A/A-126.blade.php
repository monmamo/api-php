@push('background')
{{ view('Mobster.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Nice monster team you got there.</x-card.flavortext.line>
    <x-card.flavortext.line>Would be a shame if something happened to it.</x-card.flavortext.line>
</x-card.flavortext>

'image-credit' => "Image by fxquadro on Freepik",

@endpush


<x-card :$cardNumber :$dx :$dy card-name="Neighborhood &#x201C;Protection&#x201D;">
    <image x="0" y="0" class="hero" href="@local(A186.jpg)" />

    <x-card.concept.staticon type="Mobster" :dx="2" />
    <x-card.concept.staticon type="Integrity" value="1d4" />

    <text y="525" filter="url(#solid)">
        <x-card.smallrule>{{ trans_choice('rules.battlefield-limit',1) }}</x-card.smallrule>
    </text>
    
    <x-card.phaserule type="Draw" lines="3">
        <text>
            <x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
            <x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
            <x-card.normalrule>or discard two of their own cards.</x-card.normalrule>
        </text>
    </x-card.phaserule>
    
</x-card>
