<?php

namespace App\Enums;

use App\CardNumber;
use App\CardSetAttributes\CardSeries;
use App\Contracts\Card\CardComponents;
use App\Contracts\HasTitleMethod;
use App\EnumReference;
use App\Strings\InlineText;
use App\Strings\Title;
use Countable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

enum CardSet: string implements Countable, HasTitleMethod
{
    // case Acadie = 'ACD';

    // #[Title('All-American Series')]
    // case AllAmericanSeries = 'USA';

    // #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    // case Aquos = 'AQ';

    // #[Title('Banes and Catastrophes Card Set')]
    // case BanesAndCatastrophes = 'B';

    // case COSMO = 'COSMO';

    // #[Title('Crime Families Card Set')]
    // case CrimeFamilies = 'MF';

    // case Dracquinia = 'DRQ';

    // #[Title('Elements and Materials Card Set')]
    // case ElementsAndMaterials = 'E';

    // case EmpireOfTheCounter = 'EC';

    // #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    // case Energos = 'EN';

    // case FairheartSaga = 'DF';
    // case FirstAid = 'FA';

    // #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    // #[Title('Folios and Floros Card Set')]
    // case FoliosAndFloros = 'F';

    // case LongIslandCounty = 'LI';
    // case Masters = 'MAS';

    // #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    // case MentalAbilities = 'MNTL';

    // case MetaLeague = 'ML';
    // case Mobsters = 'MOB';
    // case MonstersAndMotorcycles = 'MOT';
    // case MonsterSportsFederation = 'MSF';
    // case MonsterSportsLegends = 'LEG';
    // case MonstrousSeven = 'M7';
    // case MulloxOberforce = 'MO';

    // #[Title('Places and Environments Card Set')]
    // case PlacesAndEnvironments = 'P';

    // #[CardSeries(\App\Enums\CardSeries::Taxonomy)]
    // case Pyros = 'PY';

    // case PyroTA = 'PTA';
    // case RiseOfSwitch = 'AS';

    // #[Title('Traits and Abilities Card Set')]
    // case TraitsAndAbilities = 'T';

    #[Title('Base Card Set')]
    case Base = 'A';

    /**
     * @group unary
     */
    private function _makeCard(string $filename): ?CardComponents
    {
        $pattern = \sprintf('/^%s\/(%s-[A-Z0-9-]+)\.php$/U', $this->value, $this->value);

        if (\preg_match($pattern, $filename, $matches) !== 1) {
            return null;
        }
        return \App\Card\make(CardNumber::make($matches[1]));
    }

    /**
     * @group unary
     *
     * @param null|mixed $take
     */
    public function cards($take = null): Collection
    {
        $files = new Collection(Storage::disk('cards')->files($this->value));

        $files_selected = match (true) {
            \is_callable($take) => $take($files),
            \is_null($take) => $files,
        };

        return $files_selected
            ->map($this->_makeCard(...))
            ->filter(fn ($value): bool => $value instanceof CardComponents);
    }

    /**
     * @group nonary
     */
    public function count(): int
    {
        return \count($this->cards());
    }

    /**
     * @group nonary
     */
    public function title(): InlineText
    {
        return EnumReference::make($this)->title();
    }
}
