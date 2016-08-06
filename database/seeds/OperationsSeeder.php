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
            'envelope_id' => 1,
            'name' => 'Loyer aout',
            'amount' => '7000',
            'date' => '2016-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA + liquide',
            'amount' => '3000',
            'date' => '2016-07-28',
        ]);
    }
}
