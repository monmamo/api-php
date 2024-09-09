<x-card.Trait :$cardNumber card-name="Absorb Water" >
    <g class="svg-hero"><?= view('Aquos.icon') ?></g>

    <text x="50%" y="600" width="100%" height="auto" filter="url(#solid)">
@smallrule(Requires Aquos.)
@normalrule(If hit by an Attack that results in the attacker)
@normalrule(discarding Water, attach those cards to)
@normalrule(this Monster.)
@smallrule((When those cards are discarded, they go )
@smallrule(to the Discard of the player who owns them.)
            </text>
</x-card.Trait>
