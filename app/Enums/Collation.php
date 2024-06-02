<?php

namespace App\Enums;

enum Collation: string
{
    case PlainText = 'ascii_general_ci'; // case-insensitive
    case Unicode = 'utf8mb4_unicode_ci'; // case-insensitive
}
