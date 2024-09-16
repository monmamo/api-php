@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Mana Lottery" >
<x-card.concept-card type="Vendor" />
  <x-card.concept-card type="Item">Item</x-card.concept>

<x-card.rulebox>
<x-slot:normal>
<x-card.normalrule>Discard two or more cards from your hand.</x-card.normalrule>
<x-card.normalrule>Lay your hand aside. Draw twice as many</x-card.normalrule>
<x-card.normalrule>cards as you discarded. You may reveal any Mana</x-card.normalrule>
<x-card.normalrule>cards you draw and put them in your hand.</x-card.normalrule>
<x-card.normalrule>Put the remaining cards at the bottom of your Library,</x-card.normalrule>
<x-card.normalrule>then shuffle your Library.</x-card.normalrule>
  </x-slot:normal>
</x-card.rulebox>
</x-card.Vendor>
<?php
 [
  ],
  "image": {
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    <x-card.image-credit>Image by storyset on Freepik</x-card.image-credit>
@endpush
// https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm
