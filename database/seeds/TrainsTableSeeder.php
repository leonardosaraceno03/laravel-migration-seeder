<?php

use App\Models\Train;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [

                'stazione_di_partenza' => 'catania',
                'stazione_di_arrivo' => 'messina'
            ],
            [

                'stazione_di_partenza' => 'messina',
                'stazione_di_arrivo' => 'palermo'
            ]
        ];
        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->stazione_di_partenza = $elem['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $elem['stazione_di_arrivo'];
            $newTrain->save();
        }
    }
}
