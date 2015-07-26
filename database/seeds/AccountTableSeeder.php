<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
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
        $account = Account::create([
            'name' => 'Compte joint',
        ]);

        $account->users()->attach(1, ['owner' => 1]);
        $account->users()->attach(2, ['owner' => 0]);
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
        $account = Account::create([
            'name' => 'Vacances en Écosse',
        ]);

        $account->users()->attach(1, ['owner' => 1]);

        $account->delete();
    }
}
