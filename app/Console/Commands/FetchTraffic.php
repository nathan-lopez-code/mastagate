<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Traffic;
use Carbon\Carbon;

class FetchTraffic extends Command
{
    protected $signature = 'fetch:traffic';
    protected $description = 'Récupérer le trafic et sauvegarder dans la base';

    public function handle()
    {
        $today = Carbon::today()->toDateString();

        // Exemple simple : ajout aléatoire de visites pour test
        $visits = rand(50, 200);

        Traffic::updateOrCreate(
            ['source' => 'site', 'date' => $today],
            ['visits' => $visits]
        );

        $this->info("Trafic du $today enregistré : $visits visites");
    }
}
