<?php

use App\Outcome;
use App\Revenue;
use Illuminate\Database\Seeder;

class OperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->july();
        $this->august();
        $this->september();
        // $this->octobre();
    }

    public function july()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire juillet',
            'amount' => '7483',
            'date' => '2016-06-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA + liquide',
            'amount' => '3000',
            'date' => '2016-07-28',
        ]);
    }

    public function august()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire aout',
            'amount' => '23460',
            'date' => '2016-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer aout',
            'amount' => '7000',
            'date' => '2016-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA + liquide',
            'amount' => '2548',
            'date' => '2016-08-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Lekoseum',
            'amount' => '450',
            'date' => '2016-08-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '269',
            'date' => '2016-08-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '659',
            'date' => '2016-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Delphine',
            'amount' => '759',
            'date' => '2016-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Piscine',
            'amount' => '130',
            'date' => '2016-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Internet juillet',
            'amount' => '676',
            'date' => '2016-08-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Piscine',
            'amount' => '65',
            'date' => '2016-08-30',
        ]);
    }

    public function september()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire septembre',
            'amount' => '27037',
            'date' => '2016-09-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer septembre',
            'amount' => '6800',
            'date' => '2016-09-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '99',
            'date' => '2016-09-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Décoration céramique',
            'amount' => '80',
            'date' => '2016-09-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Loppis Puzzles',
            'amount' => '40',
            'date' => '2016-09-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Marche bio : fruits',
            'amount' => '169',
            'date' => '2016-09-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Meubles Hanaskog',
            'amount' => '4000',
            'date' => '2016-09-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Tele2',
            'amount' => '721',
            'date' => '2016-09-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '79',
            'date' => '2016-09-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Loppis : jeux Elie',
            'amount' => '545',
            'date' => '2016-09-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Loppis : vetements Elie',
            'amount' => '630',
            'date' => '2016-09-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2016-09-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Afterwork Simon',
            'amount' => '198',
            'date' => '2016-09-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '95',
            'date' => '2016-09-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Loppis : vetements Elie',
            'amount' => '425',
            'date' => '2016-09-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1695.12',
            'date' => '2016-09-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 53,
            'name' => 'Floradix',
            'amount' => '109',
            'date' => '2016-09-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'IKEA',
            'amount' => '3232.07',
            'date' => '2016-09-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch IKEA',
            'amount' => '117',
            'date' => '2016-09-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '530.51',
            'date' => '2016-09-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2016-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Parcmètre',
            'amount' => '5',
            'date' => '2016-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2016-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Timbres',
            'amount' => '130',
            'date' => '2016-09-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Timbres',
            'amount' => '39',
            'date' => '2016-09-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Ceinture Delphine',
            'amount' => '330',
            'date' => '2016-09-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '95',
            'date' => '2016-09-30',
        ]);
    }

    public function octobre()
    {
        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer octobre',
            'amount' => '6800',
            'date' => '2016-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gouter Lekoseum',
            'amount' => '49',
            'date' => '2016-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Quete Knislinge',
            'amount' => '40',
            'date' => '2016-10-02',
        ]);
    }
}
