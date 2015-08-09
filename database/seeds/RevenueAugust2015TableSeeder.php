<?php

use App\Revenue;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RevenueAugust2015TableSeeder extends Seeder
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
        Revenue::create([
            'account_id' => 1,
            'name' => 'Salaire Simon',
            'amount' => 1551.24,
            'date' => Carbon::create(2015, 8, 3, 0),
        ]);

        Revenue::create([
            'account_id' => 1,
            'name' => 'Indemnité Delphine',
            'amount' => 1146.38,
            'date' => Carbon::create(2015, 8, 4, 0),
        ]);

        Revenue::create([
            'account_id' => 1,
            'name' => 'Prestations CAF',
            'amount' => 446.10,
            'date' => Carbon::create(2015, 8, 5, 0),
        ]);

        Revenue::create([
            'account_id' => 1,
            'name' => 'Remboursement Bébé au naturel',
            'amount' => 13.94,
            'date' => Carbon::create(2015, 8, 6, 0),
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
