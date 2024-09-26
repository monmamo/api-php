<?php
namespace App\Contracts\Card;

interface CardComponents extends \App\Contracts\HasName {
    public function cardNumber(): string;
    public function set(): string;
    public function concepts(): array;
    public function imagePrompt(): ?string;
    public function imageCredit(): ?string;
    public function flavorText(): \Traversable;
    public function background(): ?string;

}
