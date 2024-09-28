{{-- inspiration: Fieldworker PTCG card https://bulbapedia.bulbagarden.net/wiki/Fieldworker_(EX_Legend_Maker_73) --}}

@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>Image by Freepik</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Fieldworker">

    <image x="0" y="0" class="hero" href="@local(hero/fieldworker.jpg)"  />
    
        'concepts' => ['Bystander'],
        <x-card.concept.row>
        <x-card.concept.card type="Male" x="0" width="190" />
        <x-card.concept.card type="Cumulative" x="190" width="190" />
        <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
        </x-card.concept.row>

        <text y="500" filter="url(#solid)">
            <x-card.smallrule>A player may have any number of Fieldworkers on the Battlefield.</x-card.smallrule>
        </text>

<x-card.phaserule type="Draw" y="170" height="130">
    <text >
        <x-card.normalrule>Draw up to 2 cards for each</x-card.normalrule>
        <x-card.normalrule>of your Fieldworkers.</x-card.normalrule>
        <x-card.normalrule>Then you may Redraw.</x-card.normalrule>
 </text>
</x-card.phaserule>

            
</x-card>
