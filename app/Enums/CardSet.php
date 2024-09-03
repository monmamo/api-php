<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum CardSet: string
{
    case Acadie = 'ACD';
    case AllAmericanSeries = 'USA';
    case Aquos = 'AQ';
    case Base = 'A';
    case COSMO = 'COSMO';
    case CrimeFamilies = 'MF';
    case Dracquinia = 'DRQ';
    case ElementsAndMaterials = 'E';
    case EmpireOfTheCounter = 'EC';
    case Energos = 'EN';
    case FairheartSaga = 'DF';
    case FirstAid = 'FA';
    case LongIslandCounty = 'LI';
    case Masters = 'MAS';
    case MentalAbilities = 'MNTL';
    case MetaLeague = 'ML';
    case Mobsters = 'MOB';
    case MonstersAndMotorcycles = 'MOT';
    case MonsterSportsFederation = 'MSF';
    case MonsterSportsLegends = 'LEG';
    case MonstrousSeven = 'M7';
    case MulloxOberforce = 'MO';
    case PlacesAndEnvironments = 'P';
    case Pyros = 'PY';
    case PyroTA = 'PTA';
    case RiseOfSwitch = 'AS';

public function cards():Collection{
    return new Collection( config('cards.'.$this->value));
}

//

    public function echo_section(): void
    {
        ?>
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"  hx-boost="true" hx-target="#right-section" hx-swap="innerHTML">
        <?php
                foreach ( $this->cards() as $card_number => $card_info) {
                    ?>
            <li><a href="<?= app('url')->route('card',['id'=>$card_number]) ?>"
 class="card-link link-body-emphasis d-inline-flex text-decoration-none rounded" data-id="<?php echo $card_number; ?>"><?php echo $card_number; ?> <?php echo $card_info->name() ?? ''; ?></a></li>
        <?php } ?>
    </ul>
<?php
    }
}
