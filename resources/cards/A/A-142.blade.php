@push('background')
{{ view('Catastrophe.background') }}
'flavor-text' => [
],
'image-credit' => "Image by USER_NAME on SERVICE",

@endpush
<x-card :$cardNumber :$dx :$dy card-name="Law Enforcement Raid">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

'concepts' => ['Catastrophe'],
<text y="500" filter="url(#solid)">
    <x-card.smallrule :source="\App\Concept::make('Catastrophe')" />
<x-card.normalrule>Exile all Mobster cards in play.</x-card.normalrule>
<x-card.normalrule>Any further Mobster cards that</x-card.normalrule>
<x-card.normalrule>are revealed go immediately to Exile.</x-card.normalrule>
</text>
</x-card>