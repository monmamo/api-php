<x-guest-layout>

<x-slot:page-title>{{__('cg')}} Rules</x-slot>

<x-slot:title>
</x-slot:title>

<x-slot:nav>
<x-nav.pill slug="game-layout">Game Layout</x-nav.pill>
<x-nav.group>
<x-nav.pill slug="game-layout-battlefield">Battlefield</x-nav.pill>
<x-nav.pill slug="game-layout-library">Library</x-nav.pill>
<x-nav.pill slug="game-layout-discard">Discard</x-nav.pill>
<x-nav.pill slug="game-layout-exile">Exile</x-nav.pill>
</x-nav.group>
<x-nav.pill slug="card-elements">Elements of a Card</x-nav.pill>
<x-nav.pill slug="setup">Setup</x-nav.pill>
<x-nav.group>
<x-nav.pill slug="setup-exile">Battle Format and Objective</x-nav.pill>
<x-nav.pill slug="setup-draft">Draft</x-nav.pill>
<x-nav.pill slug="setup-place-cards">Putting Cards Into the Battlefield</x-nav.pill>
<x-nav.pill slug="setup-completing">Completing Setup</x-nav.pill>
</x-nav.group>
</x-slot:nav>

<x-breadcrumbs>
    <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
</x-breadcrumbs>

    <h1>{{__('cg')}} Rules</h1>

<div  id="game-layout">
<h2>Game Layout</h2>
</div>

<div id="game-layout-battlefield">
<h3>The Battlefield</h3>
<p>The Battlefield is the main area in which the game and its actions take place. </p>
<p>Players should sit facing each other with a large flat playing surface between them to serve as the Battlefield. A space about 3 feet square will allow plenty of room to place and manipulate cards.</p>
</div>                
<div id="game-layout-library">
<h3 >Library</h3>
<p>The Library is the unused portion of a deck. It remains face down in front of the player or next to the Battlefield until a rule or card text allows the player to look through it. </p>
<p>Place the common Library on one side of the Battlefield. </p>
<p>The Library should be thoroughly shuffled any time someone looks through it.</p>
</div>
<div id="game-layout-discard">    
<h3>Discard</h3>
<p>The Discard pile consists of the cards that are discarded during the course of play.</p>
<p>When discarding a card to the Discard pile, a player may place the card anywhere in the pile: at the top, at the bottom, or on any random position in between (without looking through the pile).</p>
<p>The Discard pile remains face-up during the course of gameplay.</p>
<p>A player may not look through, shuffle or rearrange the Discard pile unless and only when a rule or card text allows him to do so.</p>
<p>Make the Discard pile to the right of the Library.</p>
</div>
<div id="game-layout-exile">                
<h3>Exile</h3>
<p>The Exile zone also consists of the cards that are discarded during the course of play. However, cards moved to the Exile zone are considered removed from the game. They cannot be retrieved at any time or by any means during gameplay.</p>
<p>Cards in the Exile zone remain face-up during the course of gameplay. A player may stack the cards, but must reveal the card completely if any player invokes the card being in Exile.</p>
<p>Make the Exile pile to the left of the Library.</p>
</div>
<div id="card-elements">
<h2>Elements of a Card</h2>
<h3>Card Name</h3>
<p>The Card Name names what the card represents: a Monster, a character, a place, some sort of action, etc. </p>
<p>All cards with the same Card Name are considered to be the same thing, even if the specific text or any other attribute is different. Different cards (differentiated by Card Number) may have the same Card Name. For example, there are cases where two different cards can have the same Card Name but differing Card Types. </p>
<p>Cards can represent specific characters or concepts in the Monsters Masters & Mobsters universe (a named Anthrope, a named Monster, a specific place, etc.). In those cases, only one of the card may be on the Battlefield at any particular part in time.</p>
<h3>Card Type</h3>
<p>The Card Type indicates and sets the general function of the card. The Card Type section of this rulebook lists and explains the various Card Types.</p>
<h3>Card Text</h3>
<p>The Card Text indicates specific information associated with the card, including:</p>
<p>How many of the card may be on the Battlefield at any particular part in time.</p>
<p>Specific rules that apply to the use of that card.</p>
<p>Values of various statistics associated with the card.</p>
<h3>Flavor Text</h3>
<p>Flavor Text has no effect on the mechanics of the game, but adds lore or characterization to the card.</p>
<h3>Card Number</h3>
<p>Finally, the Card Number uniquely identifies the card among all cards in the Monsters Masters & Mobsters Card System. As with Flavor Text, the Card Number has no effect on the mechanics of the game.</p>
<h3>Monster Properties</h3>
<p>Monster cards have the following statistics:</p>
<ul>
    <li>HP: The highest number of health points that the Monster can have. This number is also called “Damage Capacity” and the points are also called “damage points.”</li>
    <li><a href="/concepts/Level">Level</a>: A number indicating the relative experience of the Monster.</li>
    <li><a href="/concepts/Size">Size</a>: A number indicating the relative size of the Monster.</li>
    <li><a href="/concepts/Speed">Speed</a>: A number indicating the relative speed of the Monster.</li>
    <li>Biological sex of the monster (male or female).</li>
    <li>Taxons: Attributes that determine the core genetic properties of the Monster.</li>
    <li>Boost: Indicates the number of cards that a Monster can fetch on a Draw phase. Also applies to some skills.</li>
    <li>Innate skill, if the Monster has one.</li>
</ul>
</div>

<div id="setup">
<h2 >Setup</h2>
</div>
<h3 id="setup-format">Battle Format and Objective</h3>
<p>The Card Game supports multiple ways of playing the game:</p>
<ul>
<li>Players can compete as individuals or as teams.</li>
<li>Players can set the objective of the game, such as victory being that a certain numbers of Monsters are knocked out.</li>
<li>Players can set the conditions that need to be met before the battle can begin. For example, if the battle is a three-on-three battle, then each player must have three Monsters on the Battlefield before the battle can officially begin. </li>
</p>

<p>For new or inexperienced players, we recommend that you start with the following format:</p>
<ul>
<li>Two players.</li>
<li>Each player starts with one Master and two Monsters on the Battlefield.</li>
<li>Additional Monsters <strong>cannot</strong> be added to the Battlefield as the game progresses.</li>
<li>Only Monsters can attack, though Masters, Mobsters and Bystanders can be attacked.</li>
<ul>

<p>💡 The default format is a head-to-head battle with an equal number of Monsters on each team. New players should start with one Monster each while familiarizing themselves with the rules and gameplay, and expand play to include two or three Monsters per player as they become more familiar with the game. </p>
<p>See the Battle Formats section for details on battle formats and special rules.</p>

<h3 id="setup-place-cards">Putting Cards Into the Battlefield</h3>
<p>The Setup phase proceeds as a series of turns in which each player makes one play per turn. The Setup phase cannot complete until the requirements of the agreed-upon battle format are met.</p>
<p>To determine who gets the first setup turn, each player rolls a die. The player who receives the highest number gets to go first. Play proceeds clockwise from there.</p>
<p>Each player draws a hand of seven cards.</p>
<p>Each player must do one of the following during their turn:</p>
<p>Place a Master, Mobster, Bystander, Drone, or Place card on the Battlefield.</p>
<p>If a Mobster card with the same name as a Bystander card that is already on the Battlefield is put onto the Battlefield, the Bystander card is discarded.</p>
<p>Attach one card of one of the following types to one of your Monster cards already on the Battlefield: Trait, Mana.</p>
<p>For the purposes of effects and restrictions that apply to the card entering the Battlefield, the entire Setup phase counts as one instance of the card entering the Battlefield. (For example, Traits can be attached to Monsters only when the Monster enters the Battlefield, but the entire Setup phase counts as a Monster entering the Battlefield.)</p>
<p>Attach a Proficiency card to a Master, Mobster, Bystander card.</p>
<p>Play a Draw or Vendor card.</p>
<p>Discard any number of cards.</p>
<p>If the requirements of the format have been met, declare your setup complete.</p>
<p>NOTE: A player must play or discard at least one card on each turn during setup.</p>
<p>Regardless of what you do, you must have seven cards in your hand at the end of your turn. If you have fewer than seven cards, draw back up to seven. If you have more than seven cards, discard down to seven.</p>
<h3 id="setup-completing">Completing Setup</h3>
<p>Once the requirements of the chosen Battle Format have been met, any player may declare setup complete. All other players will have one final Setup turn.</p>

<h2 id="combat">Combat</h2>


<h2 id="special-plays">Special Plays and Rules</h2>

<ul>
    <li><a href="/cg/bribery">Integrity and Bribery</a></li>
    <li><a href="/cg/power-up">Power Up</a></li>
    <li><a href="/cg/secret-play">Secret Play</a></li>
    <li><a href="/cg/sucker-punch">Sucker Punch</a></li>
</ul>


</x-guest-layout>
