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
<x-nav.pill slug="combat">Combat</x-nav.pill>
<x-nav.group>
<x-nav.pill slug="draw-phase">Draw Phase</x-nav.pill>
<x-nav.pill slug="upkeep-phase">Upkeep Phase</x-nav.pill>
<x-nav.pill slug="command-phase">Command Phase</x-nav.pill>
<x-nav.pill slug="resolution-phase">Resolution Phase</x-nav.pill>
</x-nav.group>
<x-nav.pill slug="special-plays">Special Plays and Rules</x-nav.pill>
</x-slot:nav>

<x-breadcrumbs>
    <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
</x-breadcrumbs>

    <h1>{{__('cg')}} Rules</h1>

<p>Before reading this page, if you haven't already, please read about the <a href="/cg">Card System</a>. You'll want to know the parts of each card and the philosophy behind the system. The Card System gives you the means and ability to customize your starter set, make your own decks, and use your favorite Classic Card Duel in other Monsters Masters & Mobsters games.</p>

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


<h2 id="setup-format">Battle Format and Objective</h2>
<p>The Card Game supports multiple ways of playing the game:</p>
<ul>
<li>Players can compete as individuals or as teams.</li>
<li>Players can set the objective of the game, such as victory being that a certain numbers of Monsters are knocked out.</li>
<li>Players can set the conditions that need to be met before the battle can begin. For example, if the battle is a three-on-three battle, then each player must have three Monsters on the Battlefield before the battle can officially begin. </li>
</ul>

<p>For new or inexperienced players, we recommend that you start with the following format:</p>
<ul>
<li>Two players.</li>
<li>Each player starts with one Master and two Monsters on the Battlefield.</li>
<li>Additional Monsters <strong>cannot</strong> be added to the Battlefield as the game progresses.</li>
<li>Only Monsters can attack, though Masters, Mobsters and Bystanders can be attacked.</li>
</ul>

<p>💡 The default format is a head-to-head battle with an equal number of Monsters on each team. New players should start with one Monster each while familiarizing themselves with the rules and gameplay, and expand play to include two or three Monsters per player as they become more familiar with the game. </p>
<p>See the Battle Formats section for details on battle formats and special rules.</p>

<div id="setup">
<h2 >Setup</h2>
</div>

<h3 id="setup-place-cards">Putting Cards Into the Battlefield</h3>
<p>The Setup phase proceeds as a series of turns in which each player makes one play per turn. The Setup phase cannot complete until the requirements of the agreed-upon battle format are met.</p>
<p>To determine who gets the first setup turn, each player adds up the levels of the Monsters they have on the Battlefield. If there are none for the particular format, roll a die. The player who receives the highest number gets to go first. Play proceeds clockwise from there.</p>
<p>Each player draws a hand of seven cards.</p>
<p>Each player must do one of the following during their turn:</p>
<ul>
<li>Place a <x-links.concept>Master</x-links.concept>, <x-links.concept>Mobster</x-links.concept>, <x-links.concept>Bystander</x-links.concept>, <x-links.concept>Drone</x-links.concept>, or <x-links.concept>Place</x-links.concept> card on the Battlefield.</li>
<li>If a Mobster card with the same name as a Bystander card that is already on the Battlefield is put onto the Battlefield, the Bystander card is discarded.</li>
<li>Attach one card of one of the following types to one of your Monster cards already on the Battlefield:
    <ul>
<li><x-links.concept>Trait</x-links.concept>: For the purposes of effects and restrictions that apply to the card entering the Battlefield, the entire Setup phase counts as one instance of the card entering the Battlefield. (For example, Traits can be attached to Monsters only when the Monster enters the Battlefield, but the entire Setup phase counts as a Monster entering the Battlefield.)</li>
    </ul>
{{--<li>Attach a Proficiency card to a Master, Mobster, Bystander card.</li>--}}
<li>Play a <x-links.concept>Draw</x-links.concept> or <x-links.concept>Vendor</x-links.concept> card.</li>
<li>Discard any number of cards.</li>
</ul>
<p>If the requirements of the format have been met, declare your setup complete.</p>
<p>NOTE: A player must play or discard at least one card on each turn during setup.</p>
<p>Regardless of what you do, you must have seven cards in your hand at the end of your turn. If you have fewer than seven cards, draw back up to seven. If you have more than seven cards, discard down to seven.</p>
<h3 id="setup-completing">Completing Setup</h3>
<p>Once the requirements of the chosen Battle Format have been met, any player may declare setup complete. All other players will have one final Setup turn.</p>

<h2 id="combat">Combat</h2>

<p>The same player who took the first Setup turn takes the first Combat turn. Play proceeds clockwise from there.</p>

<p>
During the Combat Phase of the game, each player takes turns. Each player turn consists of a series of four phases: <a href="#draw-phase">Draw</a>, <a href="#upkeep-phase">Upkeep, <a 
href="#command-phase">Command</a>, <a href="#resolution-phase">Resolution</a>.
</p>

<h3 id="draw-phase">Draw Phase <x-icons.inline.concept>Draw</x-icons.inline.concept></h3>

<p>Apply effects and abilities that trigger on the Draw phase starting with the player of the current turn.</p>

<p>In the Draw Phase, the player gets one Draw action by default. A Draw action consists of one of the following actions:</p>
<ul>
    <li>Draw a card from your Library.</li>
    <li>Play a <x-links.concept name="Draw">Draw-type</x-links.concept> card. Perform the action specified by that card. Then discard that card.</li>
    <li>Play a <x-links.concept name="Vendor">Vendor-type</x-links.concept> card. Perform the action specified by that card. Then place that card on the bottom of your Library.</li>
    <li>Play a <x-links.concept name="Catastrophe">Catastrophe</x-links.concept> card. A Catastrophe card must be played before any other cards in your turn; otherwise it has no effect.</li>
    <li>Play a <x-links.concept>Monster</x-links.concept> card from your hand as a Vendor-type card. Search your Library for a card. Put that card in your hand, shuffle your Library, and put the Monster at the bottom of the Library. (This is called the “Fetch” rule.)
    </li>
    <li>Use a <x-links.concept name="Draw">Draw</x-links.concept> effect given by a card on the Battlefield.</li>
</ul>



<p>
Some cards and effects give you the ability to use another Draw action. You may do so only if the card played allows it or an effect on another card allows it.
</p>
{{--NOTE: In two-player games, the player who takes the first turn does not get a Draw phase for that turn.--}}

<h3 id="upkeep-phase">Upkeep Phase <x-icons.inline.concept>Upkeep</x-icons.inline.concept></h3>

<p>Apply effects and abilities that trigger on the Upkeep phase, starting with the player of the current turn.</p>
<p>You may do any of the following during this phase:</p>
<ul>
    <li>Play any number of Upkeep-type cards.</li>
    <li>Place a <x-links.concept>Master</x-links.concept>, <x-links.concept>Mobster</x-links.concept>, <x-links.concept>Bystander</x-links.concept>, <x-links.concept>Drone</x-links.concept>, or <x-links.concept>Place</x-links.concept> card on the Battlefield.</li>
    <li>If a Mobster card with the same name as a Bystander card that is already on the Battlefield is put onto the Battlefield, the Bystander card is discarded.</li>
        <li>Attach cards to Monsters on the Battlefield. You may attach other cards of the rules of the card allow it.</li>
    <li>Use Upkeep-phase effects given by cards on the Battlefield.</li>
</ul>


<h3 id="command-phase">Command Phase <x-icons.inline.concept>Command</x-icons.inline.concept></h3>

<p>The Command Phase is where you command your Monsters to attack or perform other skills against other Monsters.</p>
<p>Every Monster has a default Attack called Pounce, which does one point of damage for each Size point that the Monster has. Every Monster has a default Defense called Dodge, which prevents one point of damage for each Speed point that the Monster has. Every Monster has Pounce and Dodge even though these skills are not printed on the card.</p>
<ul>
<li>For each Monster that you have on the Battlefield, if nothing prevents the Monster from attacking or using a skill during the turn, you may do one of the following:</li>
<li>Play an <x-links.concept>Attack</x-links.concept> card.</li>
<li>Use Pounce.</li>
<li>Attack a Mobster. The Mobster’s effect does not apply for this turn. The player of the Mobster immediately shuffles the Mobster into his or her Library.</li>
<li>Do something that may result in damage or other effects to other Monsters.
<ul><li>If the Monster attacks, the player controlling the targeted Monster may declare a Defense with which the targeted Monster will respond.</li></ul>
<li>Each Monster can only defend against a single attacker, but multiple defending Monsters can defend against the same attacker.</li>
</ul>

<p>The opposing players may declare Skills their Monsters will use to resist these effects.</p>
<p>Any abilities that trigger on the Command phase take place before any attacks are declared, starting with the player of the current turn. A Command-phase effect may change or affect the order in which players can declare attacks.</p>
<p>NOTE: All attacks, defenses and skills must be declared. A Monster never attacks, defends or uses a skill unless its player declares the attack or skill. If you fail to declare an attack or skill for a particular Monster during the Command Phase of a turn, the Monster does not attack and does not use any skill. If a Monster is targeted and its player does not explicitly declare a Defense, the Monster uses Dodge.</p>

<h3 id="resolution-phase">Resolution Phase <x-icons.inline.concept>Resolution</x-icons.inline.concept></h3>

<p>The Resolution Phase is where all attacks, defenses, and other effects are resolved. The result of the Resolution Phase is the new state of battle for the next player.</p>
<p>Perform the following steps to resolve the turn:</p>
<ol>
<li>Apply any special effects on the Monsters that go into effect before attacks and skills are resolved.</li>
<li>Calculate and apply the damage done to each Monster that is attacked. This process is listed below.</li>
<li>Calculate and apply any other damage or effects to any Monsters in play.</li>
<li>All Monsters with zero Health are now Knocked Out and no longer able to battle. Remove all cards attached to those Monsters other than Traits and put those cards in your Discard pile. Turn the Monster card sideways to indicate that it is Knocked Out.
<ul><li>Monsters that have been Knocked Out cannot be revived unless the Battle Format or a card text allows it.</li></ul></li>
<li>Apply any special effects on the Monsters that go into effect after attacks and skills are resolved.</li>
<li>Any Attack, Defense and Skill cards that were used in the Resolution Phase go to the bottom of the respective player’s Library. (You may not look at any cards in the Library while placing the cards at the bottom. If you are placing multiple cards at the bottom of the Library, arrange them as you desire before placing them in the Library.)</li>
</ol>

<h2 id="special-plays">Special Plays and Rules</h2>

<ul>
    <li><a href="/cg/bribery">Integrity and Bribery</a></li>
    <li><a href="/cg/power-up">Power Up</a></li>
    <li><a href="/cg/secret-play">Secret Play</a></li>
    <li><a href="/cg/sucker-punch">Sucker Punch</a></li>
</ul>


</x-guest-layout>
