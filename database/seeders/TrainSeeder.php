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

        $trains_data =
            [
                [
                    "azienda" => "LaravelTrain",
                    "stazione_di_partenza" => "Milano",
                    "stazione_di_arrivo" => "Roma",
                    "codice_treno" => "12",
                    "numero_carrozze" => 2,
                    "orario_di_partenza" => "2024-03-21 08:00:00",
                    "orario_di_arrivo" => "2024-03-21 17:00:00",
                ],

                [
                    "azienda" => "Boolean",
                    "stazione_di_partenza" => "Paradiso",
                    "stazione_di_arrivo" => "Torino",
                    "codice_treno" => "3",
                    "numero_carrozze" => 3,
                    "orario_di_partenza" => "2024-03-21 08:10:00",
                    "orario_di_arrivo" => "2024-03-21 18:00:00",
                ],
            ];

        foreach ($trains_data as $train_data) {


            $train = new Train;


            $train->azienda = $train_data['azienda'];
            $train->stazione_di_partenza = $train_data['stazione_di_partenza'];
            $train->stazione_di_arrivo = $train_data['stazione_di_arrivo'];
            $train->codice_treno = $train_data['codice_treno'];
            $train->numero_carrozze = $train_data['numero_carrozze'];

            $train->orario_di_partenza = $train_data['orario_di_partenza'];
            $train->orario_di_arrivo = $train_data['orario_di_arrivo'];
            // $train->in_orario = 1;
            // $train->cancellato = 0;
            $train->save();
        }
    }
}
