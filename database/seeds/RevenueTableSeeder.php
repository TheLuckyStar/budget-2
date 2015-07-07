<?php

use Illuminate\Database\Seeder;

class RevenueTableSeeder extends Seeder
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
        DB::table('revenues')->insert([
            'account_id' => 1,
            'name' => 'Salaire Simon',
            'amount' => 1551.24,
            'date' => mktime(0, 0, 0, 7, 2, 2015),
        ]);
        EventTableSeeder::seedFromEntity('revenue');

        DB::table('revenues')->insert([
            'account_id' => 1,
            'name' => 'Indemnité Delphine',
            'amount' => 1108.20,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('revenue');

        DB::table('revenues')->insert([
            'account_id' => 1,
            'name' => 'Prestations CAF',
            'amount' => 446.10,
            'date' => mktime(0, 0, 0, 7, 6, 2015),
        ]);
        EventTableSeeder::seedFromEntity('revenue');
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
        DB::table('revenues')->insert([
            'account_id' => 2,
            'name' => 'Enveloppe vacances',
            'amount' => 600,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('revenue');

        DB::table('revenues')->insert([
            'account_id' => 2,
            'name' => 'Enveloppe nourriture',
            'amount' => 200,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
        ]);
        EventTableSeeder::seedFromEntity('revenue');
    }
}
