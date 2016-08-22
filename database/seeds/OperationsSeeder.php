<?php

use App\Outcome;
use App\Revenue;
use Illuminate\Database\Seeder;

class OperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Avance sur salaire',
            'amount' => '10000',
            'date' => '2016-07-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA + liquide',
            'amount' => '3000',
            'date' => '2016-07-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer aout',
            'amount' => '7000',
            'date' => '2016-08-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Avance sur salaire',
            'amount' => '5000',
            'date' => '2016-08-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA + liquide',
            'amount' => '2733',
            'date' => '2016-08-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Lekoseum',
            'amount' => '450',
            'date' => '2016-08-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '269',
            'date' => '2016-08-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '659',
            'date' => '2016-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Delphine',
            'amount' => '759',
            'date' => '2016-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Piscine',
            'amount' => '130',
            'date' => '2016-08-14',
        ]);
    }
}
