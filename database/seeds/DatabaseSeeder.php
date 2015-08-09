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

        $this->call(AccountTableSeeder::class);
        $this->call(RevenueTableSeeder::class);

        $this->call(EnvelopeTableSeeder::class);
        $this->call(IncomeTableSeeder::class);
        $this->call(OutcomeJuly2015TableSeeder::class);

        Model::reguard();
    }
}
