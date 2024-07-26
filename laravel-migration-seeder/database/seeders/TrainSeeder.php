<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('train')->insert([
            [
                'azienda' => 'Trenitalia',
                'Stazione_di_partenza' => 'Roma Termini',
                'Stazione_di_arrivo' => 'Milano Centrale',
                'Orario_di_partenza' => Carbon::create('2024', '07', '25', '08', '00', '00'),
                'Orario_di_arrivo' => Carbon::create('2024', '07', '25', '12', '00', '00'),
                'codice treno' => 'FR1234',
                'n_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Italo',
                'Stazione_di_partenza' => 'Napoli Centrale',
                'Stazione_di_arrivo' => 'Torino Porta Nuova',
                'Orario_di_partenza' => Carbon::create('2024', '07', '25', '09', '30', '00'),
                'Orario_di_arrivo' => Carbon::create('2024', '07', '25', '15', '00', '00'),
                'codice treno' => 'IT5678',
                'n_carrozze' => 8,
                'in_orario' => false,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Frecciarossa',
                'Stazione_di_partenza' => 'Firenze SMN',
                'Stazione_di_arrivo' => 'Venezia Santa Lucia',
                'Orario_di_partenza' => Carbon::create('2024', '07', '25', '11', '00', '00'),
                'Orario_di_arrivo' => Carbon::create('2024', '07', '25', '13', '30', '00'),
                'codice treno' => 'FR9876',
                'n_carrozze' => 9,
                'in_orario' => true,
                'cancellato' => true,
            ],
        ]);
    }
}

