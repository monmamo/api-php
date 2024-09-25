<?php

return [
    'name' => 'Crooked Cop',

    'concepts' => ['Vendor', 'Criminal', 'Integrity:1d4'],
    'ai' => true,
    'image-prompt' => null,

    'flavor-text' => ['The wall of silence is blue.'],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A-045.jpg)" />
<x-card.phaserule type="Draw" lines="6">
      <text >
<x-card.normalrule>Choose an opponent. Choose</x-card.normalrule>
<x-card.normalrule>random card from that opponent's hand.</x-card.normalrule>
<x-card.normalrule>They must discard that card. Reveal cards</x-card.normalrule>
<x-card.normalrule>from the top of your Library until an</x-card.normalrule>
<x-card.normalrule>Item card appears. Put that card in your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle the other cards back into your Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
