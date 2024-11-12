<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// Authority and justice.

// 10000,0,Draco ,purple,

// The power of authority and justice.
// Alternates:
// Regor
// Male monster with the Regos power.
// Regander
// Male anthrope with the Regos power.
// Regess
// Female monster with the Regos power.
// Recquin
// Female anthrope with the Regos power.
// Indicators
// Irises: Blue-violet.
// Color: darkviolet

// Assets:
// Forces the beholder to be honest.
// Forces the beholder to act with integrity.
// Forces the beholder to seek justice.
// Gives the beholder the ability to read the honesty and integrity of others.
// Mind control.
// Ability to grow through adulthood.
// Strength and resistance against mental and physiological powers.
// Flaws:
// Limited reproductivity.
// The beholder often fails to see the fallibility in others.
// Beholder is prone to antisocial behavior.
// Can become very belligerent when angry.
// The national government of Pluralis has a standing order requiring the confiscation of any Regos monster found in the wild without proof of anthrope ownership,
// Why are there so few anthropes with the Regos power?
// As far as most people know, the Regos genetic line died off generations ago.
// # uses of Regos monsters
// Courts and law-enforcement agencies use Regos monsters to detect lies and false testimony.
// The laws of [[Pluralis]] allow courts to admit Regos-influenced testimony as evidence.
// Most court sessions employ three Regos monsters: one for the plaintiff, one for the defendant, and one for the court itself, each trained to its client's needs.

#[NeuterName('Regon')]
#[MasculineAnthropeName('Regander')]
#[MasculineMonsterName('Regor')]
#[FeminineAnthropeName('Regquin')]
#[FeminineMonsterName('Regess')]
#[Rarity('powers')]
class Regos extends BaseTaxon
{
    use Power;
}
