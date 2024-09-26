<?php

namespace App\Contracts\Card;

use App\Contracts\HasName;

interface CardComponents extends HasName
{
    public function background(): ?string;

    public function cardNumber(): string;

    public function concepts(): array;

    public function flavorText(): \Traversable;

    public function imageCredit(): ?string;

    public function imagePrompt(): ?string;

    public function set(): string;
}
