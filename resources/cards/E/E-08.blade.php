@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>
<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush
<x-card :$cardNumber card-name="Pewter">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

<x-card.concept.staticon type="Mana" :dx="2" />
<x-card.concept.staticon type="Material"  />

<text y="500">
</text>
</x-card>