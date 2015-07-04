<?php

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
        DB::table('accounts')->insert([
            'name' => 'Compte joint',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('account');
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
        DB::table('accounts')->insert([
            'name' => 'Vacances en Écosse',
            'open' => 0,
        ]);
        EventTableSeeder::seedFromEntity('account');
    }
}
