<?php

use App\Transfer;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TransferAugust2015TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runAccount1();
    }

    /**
     * Run the database seed for account "Compte joint".
     *
     * @return void
     */
    public function runAccount1()
    {
        Transfer::create([
            'from_account_id' => 1,
            'to_account_id' => 3,
            'name' => "Surplus de liquidité",
            'amount' => 1000,
            'date' => Carbon::create(2015, 8, 5, 0),
        ]);

        Transfer::create([
            'from_account_id' => 1,
            'to_account_id' => 4,
            'name' => 'Virement au PEL',
            'amount' => 45,
            'date' => Carbon::create(2015, 8, 17, 0),
        ]);

        Transfer::create([
            'from_account_id' => 1,
            'to_account_id' => 2,
            'name' => 'Virement au CSL',
            'amount' => 10,
            'date' => Carbon::create(2015, 8, 17, 0),
        ]);
    }
}
