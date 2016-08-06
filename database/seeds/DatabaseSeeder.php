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

        $this->call('AccountsTableSeeder');
        $this->call('CurrenciesTableSeeder');
        $this->call('CurrencyRatesTableSeeder');
        $this->call('OperationsSeeder');

        Model::reguard();
    }
}
