<?php

namespace App\Traits;

use App\Contracts\Feature;

// Associated single values are: obedience, having self-discipline, being polite, honoring parents and elders.
// Associated single values are: respecting tradition, being devout, accepting one's own portion in life, being humble, and taking life in moderation.
// Respect, commitment, and acceptance of the customs and ideas that traditional culture or religion provide the self.
// Restraint of actions, inclinations, and impulses likely to upset or harm others and violate social expectations or norms.

final class Tradition implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
