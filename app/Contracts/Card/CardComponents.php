<?php

namespace App\Contracts\Card;

use App\Contracts\HasName;

interface CardComponents extends HasName
{
    /**
     * @group nonary
     */
    public function background();

    /**
     * @group nonary
     */
    public function cardNumber(): string;

    /**
     * @group nonary
     */
    public function concepts(): array;

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
    public function hero(): ?string;

    /**
     * @group nonary
     */
    public function imageCredit(): ?string;

    /**
     * @group nonary
     */
    public function set(): string;
}
