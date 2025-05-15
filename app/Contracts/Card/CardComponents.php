<?php

namespace App\Contracts\Card;

use App\Contracts\HasName;

interface CardComponents extends HasName
{
    /**
     * @group nonary
     */
    public function background(): \Traversable;

    /**
     * @group nonary
     */
    public function cardNameColor(): string;

    /**
     * @group nonary
     */
    public function cardNumber(): string;

    /**
     * @group nonary
     */
    public function concepts(...$names): array;

    /**
     * @group nonary
     */
    public function content(): \Traversable;

    /**
     * @group nonary
     */
    public function creditColor(): string;

    /**
     * @group nonary
     */
    public function hasConcept(string $name): bool;

    /**
     * @group nonary
     */
    public function imageCredit(): ?string;

    /**
     * @group nonary
     */
    public function set(): string;

    /**
     * String indicating the system or game that the card belongs to.
     *
     * @group nonary
     */
    public function system(): string;
}
