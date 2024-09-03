<?php

namespace App\Enums;


enum TickPurpose
{
    case CreateUser;
    case CreateAnthrope;
    case CreateMonster;
    case CreateOrganization;
    case CreateLeague;
    case CreateLadder;
    case CreateItem;
}
