<?php

use App\Income;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runAccount1();
        $this->runAccount2();
    }

    /**
     * Run the database seed for account "Compte joint".
     *
     * @return void
     */
    public function runAccount1()
    {
        Income::create([
            'envelope_id' => 1,
            'amount' => 800,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 2,
            'amount' => 300,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 3,
            'amount' => 800,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 4,
            'amount' => 150,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 5,
            'amount' => 100,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 6,
            'amount' => 100,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 7,
            'amount' => 100,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 8,
            'amount' => 150,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);

        Income::create([
            'envelope_id' => 9,
            'amount' => 0,
            'date' => Carbon::create(2015, 7, 1, 0),
        ]);
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
    }
}
