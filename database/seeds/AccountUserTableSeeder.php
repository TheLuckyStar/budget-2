<?php

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
        DB::table('account_user')->insert([
            'account_id' => 1,
            'user_id' => 1,
            'owner' => 1,
        ]);

        DB::table('account_user')->insert([
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
        DB::table('account_user')->insert([
            'account_id' => 2,
            'user_id' => 2,
            'owner' => 0,
        ]);
    }
}
