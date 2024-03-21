<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;


        $train->azienda = "LaravelTrain";
        $train->stazione_di_partenza = "Roma";
        $train->stazione_di_arrivo = "Paradiso";
        $train->codice_treno = "1234";
        $train->numero_carrozze = 2;
        // $train->in_orario = 1;
        // $train->cancellato = 0;
        $train->orario_di_partenza = "2024-03-21 08:00:00";
        $train->orario_di_arrivo = "2024-03-21 17:00:00";

        $train->save();
    }
}
