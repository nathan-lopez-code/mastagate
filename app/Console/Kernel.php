<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Commandes artisan disponibles.
     */
    protected $commands = [
        // Ajoute ici tes commandes personnalisées
        // ex: \App\Console\Commands\FetchTraffic::class,
    ];

    /**
     * Planification des tâches cron.
     */
    protected function schedule(Schedule $schedule)
    {
        // Exemple : exécuter la commande fetch:traffic chaque jour à minuit
        $schedule->command('fetch:traffic')->daily();
    }

    /**
     * Définition des commandes artisan à charger.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
