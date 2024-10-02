<?php

namespace App\CardAttributes;

use App\GeneralAttributes\VariadicAttribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Prerequisites extends VariadicAttribute {}
