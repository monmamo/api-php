<?php

namespace CardTypes;

abstract class SkillType implements \CardType
{
    public static function background(): ?string
    {
        return
<<<'SVG'
SVG;
    }

    public static function color(): string|array
    {
        return 'black';
    }

    public static function icon(): ?string
    {
        return
<<<'SVG'
SVG;
    }

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

    public static function title(): string
    {
        return 'Skill';
    }
}
