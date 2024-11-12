<?php

namespace App\Console\Commands;

use Canon\Taxons\Enums\TaxonType;
use Illuminate\Console\Command;

class ShowTaxonStats extends Command
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'taxonomy:show-stats';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $rarity_sums = [];

        foreach (\Canon\taxons() as $taxon) {
            $class = "\\Canon\\Taxons\\{$taxon}";
            $rarity_sums[$class::type()->name] ??= 0;
            $rarity_sums[$class::type()->name] += 1 / $class::rarity();
        }

        $this->table(
            ['Type', 'Sum'],
            [
                ['Phylum', \number_format($rarity_sums[TaxonType::Phylum->name], 3)],
                ['Genus', \number_format($rarity_sums[TaxonType::Genus->name], 3)],
                ['Species', \number_format($rarity_sums[TaxonType::Species->name], 3)],
            ],
        );
    }
}
