<?php

use App\Outcome;
use App\Revenue;
use Illuminate\Database\Seeder;

class OperationsSeeder2017 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->january();
    }

    public function january()
    {
        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer janvier',
            'amount' => '6800',
            'date' => '2017-01-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '10',
            'date' => '2017-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA (liquide)',
            'amount' => '1050',
            'date' => '2017-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA (CB)',
            'amount' => '956.77',
            'date' => '2017-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 38,
            'name' => 'Rosetta Stone',
            'amount' => '1022.50',
            'date' => '2017-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Body Store (cadeau Jeanne-Marie)',
            'amount' => '183',
            'date' => '2017-01-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Body Store (soins Delphine)',
            'amount' => '238',
            'date' => '2017-01-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Body Store (quotidien)',
            'amount' => '265',
            'date' => '2017-01-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture décembre',
            'amount' => '886',
            'date' => '2017-01-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Essence',
            'amount' => '546.90',
            'date' => '2017-01-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '859.94',
            'date' => '2017-01-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Crème crevasses',
            'amount' => '149',
            'date' => '2017-01-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '20',
            'date' => '2017-01-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Billets de train Philippe & Jeanne-Marie',
            'amount' => '738',
            'date' => '2017-01-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Thermomètre de bain',
            'amount' => '59',
            'date' => '2017-01-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Billets de train Pierre-Louis & François',
            'amount' => '820',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '197.85',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '5',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Babyphone',
            'amount' => '499',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Biltema',
            'amount' => '44.80',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '30',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Cafétaria hopital',
            'amount' => '90',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '25',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Médicament Élie',
            'amount' => '75.92',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Élie',
            'amount' => '151',
            'date' => '2017-01-12',
        ]);
    }
}
