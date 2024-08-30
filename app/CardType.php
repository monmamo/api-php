<?php

namespace App;

interface CardType extends \App\Contracts\HasIcon
{
    public static function background(): ?string;

    public static function color(): string|array;


    public static function standardRule(): \Traversable;

    public static function title(): string;
}
