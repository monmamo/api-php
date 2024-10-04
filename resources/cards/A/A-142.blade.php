@push('background')
{{ view('Catastrophe.background') }}
'flavor-text' => [
],
#[\App\CardAttributes\ImageCredit("Image by USER_NAME on SERVICE")]

@endpush
<x-card :$cardNumber :$dx :$dy card-name="Law Enforcement Raid">
#[\App\CardAttributes\LocalHeroImage('TODO.png')]

#[\App\Concept('Catastrophe')]
<text y="500" filter="url(#solid)">
    <x-card.smallrule :source="\App\Concept::make('Catastrophe')" />
<x-card.normalrule>Exile all Mobster cards in play.</x-card.normalrule>
<x-card.normalrule>Any further Mobster cards that</x-card.normalrule>
<x-card.normalrule>are revealed go immediately to Exile.</x-card.normalrule>
</text>
</x-card>
