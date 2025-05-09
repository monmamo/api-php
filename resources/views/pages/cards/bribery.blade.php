<x-guest-layout>

<x-slot:page-title>Integrity and Bribery | Card Game</x-slot>

{{-- Note: Content copied in resources/views/pages/cg/bribery.blade.php --}}

<x-breadcrumbs>
    <x-breadcrumbs.crumb url="/cards">Card System</x-breadcrumbs.crumb>
</x-breadcrumbs>

<h1>Integrity and Bribery</h1>

<p>Cards with an <a href="/concepts/Integrity">Integrity</a> stat can be “bribed” and removed from the Battlefield.</p>
<p>During the <a href="/cg/setup">Setup</a> phase or your own <a href="/concepts/Upkeep">Upkeep</a> phase, you may offer a bribe to a <a href="/concepts/Master">Master</a>, <a href="/concepts/Mobster">Mobster</a> or <a href="/concepts/Bystander">Bystander</a> on the Battlefield that has an Integrity statistic. </p>
<p>If a player attempts to play a <a href="/concepts/Vendor">Vendor</a> card, and the Vendor card has an Integrity stat, you may likewise attempt to bribe that Vendor.</p>
<p>Discard any number of cards. This is the "amount" being "paid" for the bribe. These cards cannot be recovered if the bribe fails.</p>
<p>Resolve the Integrity check indicated on the card. </p>
<p>If the Integrity check exceeds the number of cards discarded, the bribe fails. </p>
<p>Otherwise, the bribe succeeds. The bribed card goes to its player’s Discard pile along with all cards attached to it.</p>

</x-guest-layout>
