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
        Income::create([
            'envelope_id' => 9,
            'amount' => 524,
            'date' => Carbon::create(2015, 8, 1, 0),
        ]);

        $this->runAccount1(Carbon::create(2015, 7, 1, 0));
        $this->runAccount1(Carbon::create(2015, 8, 1, 0));
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
            'amount' => 850,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 2,
            'amount' => 200,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 3,
            'amount' => 750,
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
            'amount' => 50,
            'date' => $date,
        ]);

        Income::create([
            'envelope_id' => 10,
            'amount' => 200,
            'date' => $date,
        ]);
    }
}
