<?php

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
        DB::table('incomes')->insert([
            'envelope_id' => 1,
            'amount' => 800,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 2,
            'amount' => 300,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 3,
            'amount' => 800,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 4,
            'amount' => 150,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 5,
            'amount' => 100,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 6,
            'amount' => 100,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 7,
            'amount' => 100,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 8,
            'amount' => 150,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');

        DB::table('incomes')->insert([
            'envelope_id' => 9,
            'amount' => 0,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('income');
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
