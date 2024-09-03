<?php
namespace App\Items;
class Gas implements \App\Contracts\Item {}





// metatype:: [[Item]]
// #[[Baneful Item]]
// Gas refers to any type of gas or vapors that either a Monster produces or comes as a Consumable in a canister. Gas is classified by the status effect it produces. [[Gas]] can affect different [[Species]] in different ways.
// [[Monster]]s that have the GasFeature can produce Gas that can do Damage and/or have certain effects. Those effects are determined by Training and the Features of the Monster.
// Cannisters of Gas are rated at the number of [[Dose]]s they contain, the effects that the Gas produces, and the strength of those effects.
// Monster-produced Gas, on the other hand, can have an unpredictable effect.
// On each BattleTurn, before he attacks, if the Trainer holding a Gas can opts to use it, the BattleReferee rolls G=5d20. This uses G units of gas. (If there are fewer units remaining in the canister, use all of them).
// If a Trainer uses a Gas Item in battle, each Monster that he is coaching will lose 1 [[Respect]] point for each instance.
// # types of Gas
// Nasty Gas:: If the number of units used is more than 100, all effects of Features on [[Attack]]s and [[Defense]]s are disabled during this BattleTurn.
// Damaging Gas:: All opposing Monsters take 1uG points of [[Damage]].
// Confusion Gas:: All opposing Monsters are [Confused]([[Confusion]]).
// Hypnosis Gas:: All opposing Monsters are Hypnotized at [[Hypnosis]]=2G.
// Paralysis Gas:: ((GYgQXbw4v))
