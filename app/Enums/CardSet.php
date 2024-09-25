<?php

namespace App\Enums;

use App\Card;
use App\CardSetAttributes\CardSeries;
use App\GeneralAttributes\Title;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

enum CardSet: string
{
    case Acadie = 'ACD';

    #[Title('All-American Series')]
    case AllAmericanSeries = 'USA';

    #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    case Aquos = 'AQ';

    #[Title('Banes and Catastrophes Card Set')]
    case BanesAndCatastrophes = 'B';

    #[Title('Base Card Set')]
    case Base = 'A';

    case COSMO = 'COSMO';

    #[Title('Crime Families Card Set')]
    case CrimeFamilies = 'MF';

    case Dracquinia = 'DRQ';

    #[Title('Elements and Materials Card Set')]
    case ElementsAndMaterials = 'E';

    case EmpireOfTheCounter = 'EC';

    #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    case Energos = 'EN';

    case FairheartSaga = 'DF';
    case FirstAid = 'FA';

    #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    #[Title('Folios and Floros Card Set')]
    case FoliosAndFloros = 'F';

    case LongIslandCounty = 'LI';
    case Masters = 'MAS';

    #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    case MentalAbilities = 'MNTL';

    case MetaLeague = 'ML';
    case Mobsters = 'MOB';
    case MonstersAndMotorcycles = 'MOT';
    case MonsterSportsFederation = 'MSF';
    case MonsterSportsLegends = 'LEG';
    case MonstrousSeven = 'M7';
    case MulloxOberforce = 'MO';

    #[Title('Places and Environments Card Set')]
    case PlacesAndEnvironments = 'P';

    #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    case Pyros = 'PY';

    case PyroTA = 'PTA';
    case RiseOfSwitch = 'AS';

    #[Title('Traits and Abilities Card Set')]
    case TraitsAndAbilities = 'T';

    /**
     * @group nonary
     */
    public function cards(): Collection
    {
        $files = new Collection(Storage::disk('cards')->files($this->value));

        return $files->filter(fn (string $filename): bool => \preg_match('/_(.*)\.blade\.php$/U', $filename))
            ->map(fn (string $filename): string => \preg_replace('/_(.*)\.blade\.php$/U', '$1', $filename))
            ->map(fn (string $filename) => new Card($this, $filename));
    }
}
