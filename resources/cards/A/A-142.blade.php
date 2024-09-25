@push('background')
{{ view('Catastrophe.background') }}
<x-card.flavortext>
</x-card.flavortext>
'image-credit' => "Image by USER_NAME on SERVICE",

@endpush
<x-card :$cardNumber :$dx :$dy card-name="Law Enforcement Raid">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

<x-card.concept.staticon type="Catastrophe" :dx="1" />
<text y="500" filter="url(#solid)">
    <x-card.smallrule :source="\App\Concept::make('Catastrophe')" />
<x-card.normalrule>Exile all Mobster cards in play.</x-card.normalrule>
<x-card.normalrule>Any further Mobster cards that</x-card.normalrule>
<x-card.normalrule>are revealed go immediately to Exile.</x-card.normalrule>
</text>
</x-card>