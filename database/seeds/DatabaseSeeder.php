<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(InvitationTableSeeder::class);

        $this->call(AccountTableSeeder::class);
        $this->call(EnvelopeTableSeeder::class);

        $this->call(TransferJuly2015TableSeeder::class);
        $this->call(TransferAugust2015TableSeeder::class);

        $this->call(RevenueJuly2015TableSeeder::class);
        $this->call(RevenueAugust2015TableSeeder::class);

        $this->call(IncomeTableSeeder::class);

        $this->call(OutcomeJuly2015TableSeeder::class);
        $this->call(OutcomeAugust2015TableSeeder::class);

        Model::reguard();
    }
}
