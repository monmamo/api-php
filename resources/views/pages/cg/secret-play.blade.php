<x-guest-layout>

<x-slot:page-title>Secret Play | Card Game</x-slot>

<x-breadcrumbs>
    <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
    <x-breadcrumbs.crumb url="/cg/rules">Rules</x-breadcrumbs.crumb>
</x-breadcrumbs>


<h1>Secret Play</h1>


<p>During your <a href="/concepts/Upkeep">Upkeep</a> phase, you may start a Secret Play.</p>
<p>Put one card from your hand face down onto the Battlefield.</p>
<p>As long as that card is face-down, it is treated as a Monster card with level 0, 0 HP, 0 Size, 0 Speed, and no taxons. If the card takes damage, the amount of damage taken is noted until the card is revealed. You may attach <a href="/concepts/Trait">Trait</a>s, <a href="/concepts/Mana">Mana</a> or <a href="/concepts/Item">Item</a>s to the card.</p>
<p>Flip the card whenever any Attack, Defense or Skill affects the card. Flip the card if any other effect requires knowing what the card is.</p>
<p>At any time during your turn, you may choose to flip the card over.</p>
<p>When you flip that card over, do the following based on its type:</p>
<ul>
<p><a href="/concepts/Monster">Monster</a>: The card remains on the Battlefield with all attached cards.</p>
<p><a href="/concepts/Master">Master</a>, <a href="/concepts/Mobster">Mobster</a> or <a href="/concepts/Bystander">Bystander</a>: If there is room for the card on the Battlefield, it remains on the Battlefield and takes any effect dealt to it during the turn. Any cards attached to the card remain attached unless some other rule requires that they be removed.</p>
<p><a href="/concepts/Item">Item</a>: If the card must be attached to a Monster, attach it immediately to a Monster on the Battlefield. If you are unable to do so, discard the card. Otherwise the card remains on the Battlefield and takes any damage or effect dealt to it during the turn. Discard all cards attached to the card.</p>
<p><a href="/concepts/Place">Place</a>: If the card can be played, it remains on the Battlefield. Otherwise it must be discarded.</p>
<p>Anything else: Discard the card and all cards attached to it.</p>
</ul>

</x-guest-layout>
