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
        $this->runAccount1(Carbon::create(2015, 7, 1, 0));
        $this->runAccount1(Carbon::create(2015, 8, 1, 0));
        $this->runAccount2();
    }

    /**
     * Run the database seed for account "Compte joint".
     *
     * @return void
     */
    public function runAccount1($date)
    {
        Income::create([
            'envelope_id' => 1,
            'amount' => 900,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 2,
            'amount' => 300,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 3,
            'amount' => 700,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 4,
            'amount' => 200,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 5,
            'amount' => 100,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 6,
            'amount' => 100,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 7,
            'amount' => 50,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 8,
            'amount' => 150,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 9,
            'amount' => 0,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 10,
            'amount' => 250,
            'date' => $date,
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
