<?php

namespace App\Contracts;

/**
 * Indicates that this class can be converted to a string and must be converted into ab lock string. Block strings must preserve newlines.
 */
interface BlockStringable extends \Stringable {}
