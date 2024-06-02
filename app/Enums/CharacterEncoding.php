<?php

namespace App\Enums;

enum CharacterEncoding: string
{
    case PlainText = 'ascii';
    case Unicode = 'utf8mb4'; // https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-utf8mb4.html
}
