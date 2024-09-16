<?php

namespace App\Enums;

enum Collation: string
{
    case AmericanEnglishPlainText = 'en_US';
    case AmericanEnglishUnicode = 'en_US.UTF-8';
    case Slug = 'C'; // PostgreSQL: ASCII case-insensitive
}
