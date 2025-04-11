<x-guest-layout>
    <x-slot:page-title>Card System</x-slot>

<div class="text-center">
    <div class="container">
        <img src="/public/images/card-hero.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Card System Billboard" width="1920" height="1080" loading="lazy">
      </div>
    </div>


    <div class="px-4 pt-1 my-1 text-left">
        <div class="col-lg-10 mx-auto">
            <p class="lead mb-4">
<p>
    We're reimagining the business of collectible and tradable cards. The Monsters Masters & Mobsters Card System isn’t a game in itself; it’s a system of cards built from the paper to support multiple games. We’re also using this opportunity to address common criticisms of trading card games and collectible card games. We understand that buying into a TCG/CCG is a major investment. We want you to play with our game cards, not end up with boxes full of cards that are useless to you.
</p>

<h4>Hate random booster packs? So do we.</h4>
<p>
    When you buy a MonMaMoCS booster pack, you will know what you’re getting. It will be printed on the package. Our card database has every card that is commercially available, making it easy to look up all details, rulings and errata for any card.
</p>

<h4>Your cards will be just as playable 20 years from now as they are today.</h4>

<p>
    Unlike that box in our closet filled with cards that have been banned from tournaments, reprinted or otherwise devalued, your MonMaMoCS cards will always be tournament legal.
</p>
<p>
    We will not reprint rare cards. 
    
    We will print small batches of specific cards for particular events.
</p>

<h4>Name a game type. The Card System will work with it.</h4>

<p>
    The Card System is designed to work with any game that uses or could use cards:
</p>

<ul>
    <li><a href="/cg">Our traditional monster-battle TCG/CCG.</a></li>
    <li>Other pure card gamnes.</li>
    <li>Board games that use cards.</li>
    <li>Role-playing games, where cards can stand in for complex character sheets.</li>
    <li>Card-based miniatures games.</li>
    <li>Escape rooms and other puzzle games.</li>
    <li>Whatever we think of next.</li>
</ul>

        <img src="/public/images/card-parts.png" style="float: right;" alt="Illustration of the parts of a card" width="500" loading="lazy">

        <h1>Anatomy of the Card</h1>
        <h4>Card Name</h4>
            <p>The Card Name names what the card represents: a Monster, a character, a place, some sort of action, etc. </p>
            <p>All cards with the same Card Name are considered to be the same thing, even if the specific text or any other attribute is different. Different cards (differentiated by Card Number) may have the same Card Name. For example, there are cases where two different cards can have the same Card Name but differing Card Types. </p>
            <p>Cards can represent specific characters or concepts in the Monsters Masters & Mobsters universe (a named Anthrope, a named Monster, a specific place, etc.). In those cases, only one of the card may be on the Battlefield at any particular part in time.</p>
            <h4><a href="#concepts">Card Concepts</a></h4>
            <p>Concepts define properties, abilities and usage of the card each card can have any number of Concepts.</p> 

            <h4>Card Text</h4>
            <p>The Card Text indicates specific information associated with the card, including:</p>
            <ul>
                <li>How many of the card may be on the Battlefield at any particular part in time.</li>
            <li>Specific rules that apply to the use of that card.</li>
            <li>Values of various statistics associated with the card.</li>
            </ul>

            <h4>Flavor Text</h4>
            <p>Flavor Text has no effect on the mechanics of the game, but adds "flavor" to the card through lore, characterization, wit, and sometimes references to pop culture.</p>
            <h4>Card Number</h4>
            <p>Finally, the Card Number uniquely identifies the card among all cards in the Monsters Masters & Mobsters Card System.  As with Flavor Text, the Card Number has no effect on the mechanics of the game. Every card with the same number is considered to be the same card for the purpose of rules.</p>
            

<h1 id="concepts">Common Types of Cards</h1>


<h4>Character Cards</h4>

<p>
    Character cards represent the beings in the Monsters Masters & Mobsters universe. They have a name, a type, a power, and a set of statistics. They may also have a special ability or abilities. Specific types of characters include <a href="/concepts/Monster">Monster</a>, <a href="/concepts/Master">Master</a>, <a href="/concepts/Mobster">Mobster</a>, and <a href="/concepts/Mobster">Bystander</a>.
</p>

<p>All Characters that have Health Points (HP) can take damage and be knocked out. All Characters that have Size can use the Pounce attack, which does damage based on the Size of the Character.  All Characters that have Speed can use the Dodge defense, which prevents damage based on the Speed of the Character.</p>

<h4><a href="/concepts/Trait">Trait Cards</a></h4>

<p>Trait cards give Monster cards additional abilities or modify statistics of the card.</p>

<h4>Skill Cards</h4>

<p>Skill cards enable Monsters to produce various effects, for example:</p>
<ul>
<li>Causing Damage to one or more Monsters.</li>
<li>Preventing Damage from being done to itself or another Monster.</li>
<li>Changing a Monster property or condition for the current Turn or future Turns.</li>
<li>Causing a change in the Weather.</li>
</ul>

<p><a href="/concepts/Attack">Attack</a> cards specifically cause Damage or other effects to a target Monster. <a href="/concepts/Defense">Defense</a> cards specifically prevent Damage or other effects to the Monster using the Defense.</p>

<h4>Drawing Cards</h4>

            <p>Cards of the <a href="/concepts/Draw">Draw</a> concept allow a player to draw additional cards from their deck. Another concept called <a href="/concepts/Vendor">Vendor</a> also allows a player to draw cards but results in the Vendor card being put on the bottom of the Library, increasing reusability and reducing the dreaded inability to draw what the player needs because of discarded draw cards.</p>

            <h4>Item Cards</h4>

            <p>Item cards represent objects that can be used by Characters. They may have a one-time use or may be reusable. Items may be used to increase the power of a Monster, to heal a Monster, to change the Weather, or to produce other effects.</p>

            <h4>Other Types</h4>

<p>You can use <a href="/concepts/Bane">Bane</a> cards to inflict something nasty on a Monster and <a href="/concepts/Catastrophe">Catastrophe</a> cards to inflict something nasty on everyone. </p>

<h1>Card Sets</h1>

<div class="container">
    <div class="row">
        @foreach (collect(\App\Enums\CardSet::cases())->splitIn(6) as $chunk)
        <div class="col-sm-6 col-md-2 ">
            <dl>
                @foreach ($chunk as $set)
                <dt><a href="/cards/set/{{ $set->value }}">{{ sprintf('%s (%s)', $set->name, $set->value) }}</a></dt>
                @endforeach
            </dl>
        </div>
        @endforeach
    </div>
    </div>

</div>


</x-guest-layout>
