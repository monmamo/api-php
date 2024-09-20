@push('background')
{{ view('Catastrophe.background') }}
<x-card.flavortext>
</x-card.flavortext>
<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush
<x-card :$cardNumber card-name="Hailstorm">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

<x-card.concept.staticon type="Catastrophe" :dx="1" />
<text y="500" filter="url(#solid)">
    <x-card.smallrule>This card can be played only if Spring or Autumn is in play.</x-card.smallrule>
<x-card.normalrule>Discard all Mobster and Bystander cards in play.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards in play.</x-card.normalrule>
</text>
</x-card>