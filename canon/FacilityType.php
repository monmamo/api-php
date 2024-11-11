<?php

namespace App\Enums;

use App\GeneralAttributes\Gloss;

enum FacilityType
{
    case Abbey;

    #[Gloss('A Facility where a monster can [learn and practice](Skills and Skill Training) new Skills.')]
    case Academy;

    case Apothecary;

    #[Gloss('A small Venue where official Battles take place.')]
    case Arena;

    case Asylum;

    #[Gloss('A Facility that represents a base of operations for an Organization.')]
    case Base;

    case Capitol;
    case Castle;
    case Citadel;

    #[Gloss('A Facility within a Community or Land where a Trainer can receive vital services for a Monster.')]
    case Clinic;

    #[Gloss('The Facility where a Community\'s government is located.')]
    case CommunityHall;

    case Convent;

    #[Gloss('The Facility in a City that is the seat of government and where justice is administered.')]
    case Courthouse;

    case Dispensary;
    case Drugstore;
    case Estate;
    case Factory;

    #[Gloss('A Facility that engages in commercial monster husbandry and breeding.')]
    case Farm;

    case Farmstead;
    case Fort;

    #[Gloss('A Facility for training Monsters.')]
    case Gym;

    case Hermitage;
    case Hospice;
    case Hospital;
    case Hotel;

    #[Gloss('An Organization that engages in commercial monster husbandry and breeding.')]
    case Husbandry;

    case Infirmary;

    #[Gloss('The collection Items possessed by a Anthrope and stored at a Facility.')]
    case Inventory;

    case Keep;

    #[Gloss('A Facility that performs scientific work regarding Monsters.')]
    case Laboratory;

    case Manor;

    #[Gloss('A Facility where Merchants can sell Items and Consumables to Characters.')]
    case Market;

    case Monastery;

    #[Gloss('A Facility that specifically cares for [Baby](Baby Monster) and [Child](Child Monster) Monsters.')]
    case Nursery;

    case Orphanage;
    case Palace;
    case Pharmacy;
    case Precinct;
    case Priory;

    #[Gloss('A specialized Facility where a [Monster Race](Race (Competition type)) can take place.')]
    case Racecourse;

    #[Gloss('A Facility where a Character lives and can store Items.')]
    case Residence;

    case Sanctuary;

    #[Gloss('A type of Place devoted to spiritual devotion or commemoration, particularly of those who have died.')]
    case Shrine;

    #[Gloss('A large Venue where official Battles take place.')]
    case Stadium;

    case Surgery;
    case Temple;
    case Tower;

    #[Gloss('A Facility that is intended for Competitions, particularly sanctioned Competitions.')]
    case Venue;

    case Warehouse;
}
