<?php

use App\Account;
use App\Revenue;
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
        $this->runAccount3();
        $this->runAccount4();
        $this->runAccount5();
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

        $revenue = new Revenue([
            'amount' => 415.64,
        ]);
        $account->revenues()->save($revenue);

        $account->owner()->attach(1, ['owner' => 1]);
        $account->guests()->attach(2, ['owner' => 0]);
    }

    /**
     * Run the database seed for account "Livret Agir".
     *
     * @return void
     */
    public function runAccount2()
    {
        $account = Account::create([
            'name' => 'Livret Agir',
        ]);

        $revenue = new Revenue([
            'amount' => 290.14,
        ]);
        $account->revenues()->save($revenue);

        $account->owner()->attach(1, ['owner' => 1]);
        $account->guests()->attach(2, ['owner' => 0]);
    }

    /**
     * Run the database seed for account "CEL".
     *
     * @return void
     */
    public function runAccount3()
    {
        $account = Account::create([
            'name' => 'CEL',
        ]);

        $revenue = new Revenue([
            'amount' => 3500,
        ]);
        $account->revenues()->save($revenue);

        $account->owner()->attach(1, ['owner' => 1]);
        $account->guests()->attach(2, ['owner' => 0]);
    }

    /**
     * Run the database seed for account "PEL".
     *
     * @return void
     */
    public function runAccount4()
    {
        $account = Account::create([
            'name' => 'PEL',
        ]);

        $revenue = new Revenue([
            'amount' => 18510,
        ]);
        $account->revenues()->save($revenue);

        $account->owner()->attach(1, ['owner' => 1]);
        $account->guests()->attach(2, ['owner' => 0]);
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount5()
    {
        $account = Account::create([
            'name' => 'Vacances en Écosse',
        ]);

        $account->owner()->attach(1, ['owner' => 1]);

        $account->delete();
    }
}
