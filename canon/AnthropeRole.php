<?php

namespace App\Enums;

use App\GeneralAttributes\Gloss;

enum AnthropeRole
{
    #[Gloss('Supreme leader of an Organization.')]
    case Boss;

    #[Gloss('An Anthrope who specializes in Monster breeding.')]
    case Breeder;

    #[Gloss('An Anthrope who leads a Monster Team in a Competition or Tournament.')]
    case Coach;

    #[Gloss('An Anthrope who breeds Monsters commercially.')]
    case Farmer;

    #[Gloss('The Anthrope who is the supreme elected official of a Land.')]
    case Governor;

    #[Gloss('An Anthrope who leads an Adventure Party.')]
    case Leader;

    #[Gloss('An Anthrope who makes custom Items.')]
    case Maker;

    #[Gloss('The Anthrope who has the leadership position over a Community.')]
    case Mayor;

    #[Gloss('An experienced Monster Trainer who works with other Trainers\' Monsters to help them get additional experience.')]
    case Mentor;

    #[Gloss('A Character who [treats](Monster Healthcare) monsters and works at a Nursery or Clinic.')]
    case Nurse;

    #[Gloss('An Anthrope who devotes himself to the study of Monsters and their attributes.')]
    case Researcher;

    #[Gloss('An Anthrope who trains Monsters for Competition.')]
    case Trainer;
}
