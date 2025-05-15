<?php

use App\Contracts\Card\CardComponents;

return new class() implements CardComponents
{
    private readonly string $card_number;

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        yield '<x-card.background fill="white" />';
    }

    /**
     * @group nonary
     */
    public function cardNameColor(): string
    {
        return 'black';
    }

    /**
     * @group nonary
     */
    public function cardNumber(): string
    {
        return \basename(__FILE__, '.php');
    }

    /**
     * @group nonary
     */
    public function concepts(...$names): array
    {
        return [];
    }

    /**
     * @group nonary
     */
    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-icons.inline.concept size="100" y="100" fill="black" concept="Draw" />
        <text x="120" y="100" font-size="30" fill="black" dominant-baseline="hanging">
        <tspan x="120" >DRAW: Take one Draw action</tspan>
            <tspan x="120" dy="35">(unless something allows you to </tspan>
            <tspan x="120" dy="35">take additional Draw action).</tspan>
            </text>
        <x-icons.inline.concept size="100" y="230" fill="black" concept="Upkeep" />
        <text x="120" y="230" font-size="30" fill="black" dominant-baseline="hanging">
            <tspan>UPKEEP: Take any number of</tspan>
            <tspan x="120" dy="35">Upkeep actions.</tspan>
            </text>
        <x-icons.inline.concept size="100" y="360" fill="black" concept="Command" />
        <text x="120" y="360" font-size="30" fill="black" dominant-baseline="hanging">
            <tspan>COMMAND: Declare the attacks that your</tspan>
            <tspan x="120" dy="35">Monsters and anything else with</tspan>
            <tspan x="120" dy="35">attack ability are making,</tspan>
            <tspan x="120" dy="35">or skils that they are using.</tspan>
            </text>
        <x-icons.inline.concept size="100" y="540" fill="black" concept="Resolution" />
        <text x="120" y="540" font-size="30" fill="black" dominant-baseline="hanging">
                    <tspan>RESOLUTION: Resolve all attacks, </tspan>
                    <tspan x="120" dy="35">defenses, skills and </tspan>
                    <tspan x="120" dy="35">other effects.</tspan>
            </text>
HTML;
    }

    /**
     * @group nonary
     */
    public function creditColor(): string
    {
        return 'black';
    }

    /**
     * @group nonary
     */
    public function hasConcept(string $name): bool
    {
        return false;
    }

    /**
     * @group nonary
     */
    public function imageCredit(): ?string
    {
        return '';
    }

    /**
     * @group nonary
     */
    public function name(): string
    {
        return 'Combat Phases';
    }

    /**
     * @group nonary
     */
    public function set(): string
    {
        return 'A';
    }

    /**
     * String indicating the system or game that the card belongs to.
     *
     * @group nonary
     */
    public function system(): string
    {
        return 'Classic Card Duel';
    }
};
