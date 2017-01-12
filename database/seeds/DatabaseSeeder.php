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
        $this->call('EnvelopesTableSeeder');
        $this->call('CurrenciesTableSeeder');
        $this->call('CurrencyRatesTableSeeder');
        $this->call('OperationsSeeder2016');
        $this->call('OperationsSeeder2017');

        Model::reguard();
    }
}
