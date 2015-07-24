<?php

use App\AccountUser;
use Illuminate\Database\Seeder;

class AccountUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runUser1();
        $this->runUser2();
    }

    /**
     * Run the database seed for user "Simon Dubois".
     *
     * @return void
     */
    public function runUser1()
    {
        AccountUser::create([
            'account_id' => 1,
            'user_id' => 1,
            'owner' => 1,
        ]);

        AccountUser::create([
            'account_id' => 2,
            'user_id' => 1,
            'owner' => 1,
        ]);
    }

    /**
     * Run the database seed for user "Delphine Duban".
     *
     * @return void
     */
    public function runUser2()
    {
        AccountUser::create([
            'account_id' => 2,
            'user_id' => 2,
            'owner' => 0,
        ]);
    }
}
