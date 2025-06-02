<?php

namespace App\Console\Commands;

use App\Enums\CardSet;
use Illuminate\Console\Command;

class UpdateSearchList extends Command
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
    protected $signature = 'search:update';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $list = [];

        foreach (\Canon\taxons() as $taxon_slug) {
            $list[\strtolower($taxon_slug)] = '/taxons/' . $taxon_slug;
        }

        foreach (\Canon\concepts() as $concept_slug) {
            $list[\strtolower($concept_slug)] = '/concepts/' . $concept_slug;
        }

        foreach (CardSet::cases() as $set) {
            $list[\strtolower($set->name)] = '/cards/set/' . $set->value;

            foreach (CardSet::from($set->value)->cards() as $card_spec) {
                $card_number = $card_spec->cardNumber();

                try {
                    $list[\strtolower($card_number)] = '/cards/card/' . $card_number;
                    $list[\strtolower($card_spec->name())] = '/cards/card/' . $card_number;
                } catch (\Throwable $e) {
                    $this->error($card_spec->getSpecFilePath() . ': ' . $e->getMessage());
                    continue;
                }
            }
        }

        $path = \resource_path('search.json');
        \file_put_contents($path, \json_encode($list));
        $this->info($path);
        $this->info(\count($list) . ' entries');
    }
}
