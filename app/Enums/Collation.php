<?php

namespace App\Enums;

enum Collation: string
{
    case Slug = 'C'; // PostgreSQL: ASCII case-insensitive
    case AmericanEnglishPlainText = 'en_US';
    case AmericanEnglishUnicode = 'en_US.UTF-8';
}
