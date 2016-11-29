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
        $this->october();
        $this->november();
        $this->december();
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

    public function october()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire octobre',
            'amount' => '26592',
            'date' => '2016-10-01',
        ]);

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

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Timbres',
            'amount' => '25',
            'date' => '2016-10-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Tele2',
            'amount' => '603',
            'date' => '2016-10-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1085.63',
            'date' => '2016-10-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gouter Lekoseum',
            'amount' => '40',
            'date' => '2016-10-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Commande bodystore',
            'amount' => '1280',
            'date' => '2016-10-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Commande bodystore',
            'amount' => '380',
            'date' => '2016-10-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 53,
            'name' => 'Commande bodystore',
            'amount' => '338',
            'date' => '2016-10-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Jumelles',
            'amount' => '695',
            'date' => '2016-10-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '639',
            'date' => '2016-10-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Retrait liquide',
            'amount' => '465',
            'date' => '2016-10-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Extension barriere + rateau a feuilles',
            'amount' => '135',
            'date' => '2016-10-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '694.79',
            'date' => '2016-10-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement Kalmar',
            'amount' => '15',
            'date' => '2016-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Fil dentaire',
            'amount' => '90',
            'date' => '2016-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '62.70',
            'date' => '2016-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Kalmar',
            'amount' => '225',
            'date' => '2016-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch Kalmar',
            'amount' => '318',
            'date' => '2016-10-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Logement Öland',
            'amount' => '2000',
            'date' => '2016-10-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Essence',
            'amount' => '401.13',
            'date' => '2016-10-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Essence',
            'amount' => '474.18',
            'date' => '2016-10-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 54,
            'name' => 'Train Copenhagen',
            'amount' => '400',
            'date' => '2016-10-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '10',
            'date' => '2016-10-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '70',
            'date' => '2016-10-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '725.07',
            'date' => '2016-10-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '95',
            'date' => '2016-10-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Physiothérapeuthe',
            'amount' => '320',
            'date' => '2016-10-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Portable Delphine',
            'amount' => '210',
            'date' => '2016-10-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Enregistrement voiture',
            'amount' => '600',
            'date' => '2016-10-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École September-Octobre',
            'amount' => '700',
            'date' => '2016-10-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2016-10-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '98',
            'date' => '2016-10-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Lit Élie',
            'amount' => '450',
            'date' => '2016-10-31',
        ]);
    }

    public function november()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire novembre',
            'amount' => '24807',
            'date' => '2016-11-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Défraiement voiture C4Media',
            'amount' => '165',
            'date' => '2016-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer novembre',
            'amount' => '6800',
            'date' => '2016-11-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Barriére escalier',
            'amount' => '498.70',
            'date' => '2016-11-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '515.73',
            'date' => '2016-11-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Table de nuit Élie',
            'amount' => '100',
            'date' => '2016-11-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1054.29',
            'date' => '2016-11-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2016-11-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '95',
            'date' => '2016-11-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 38,
            'name' => 'Enregistrement voiture',
            'amount' => '1759',
            'date' => '2016-11-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => 'Contrôle technique',
            'amount' => '479',
            'date' => '2016-11-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Ikea',
            'amount' => '4520',
            'date' => '2016-11-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch Ikea',
            'amount' => '125',
            'date' => '2016-11-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '505.63',
            'date' => '2016-11-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '639',
            'date' => '2016-11-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Liquide essuie-glace',
            'amount' => '49.80',
            'date' => '2016-11-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1136.16',
            'date' => '2016-11-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2016-11-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Commode Élie',
            'amount' => '350',
            'date' => '2016-11-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Chandelier',
            'amount' => '125',
            'date' => '2016-11-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Afterwork Simon',
            'amount' => '367',
            'date' => '2016-11-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gouter Lekoseum',
            'amount' => '40',
            'date' => '2016-11-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Harald Nyborg',
            'amount' => '125.5',
            'date' => '2016-11-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1047.23',
            'date' => '2016-11-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '518',
            'date' => '2016-11-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '235',
            'date' => '2016-11-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École Novembre',
            'amount' => '600',
            'date' => '2016-11-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Spectacle Sibbhult',
            'amount' => '100',
            'date' => '2016-11-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas retraite de Noel',
            'amount' => '200',
            'date' => '2016-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Glace retraite de Noel',
            'amount' => '16.50',
            'date' => '2016-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Encheres retraite de Noel',
            'amount' => '420',
            'date' => '2016-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gouter Lekoseum',
            'amount' => '40',
            'date' => '2016-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Baignoire Shantalah',
            'amount' => '249',
            'date' => '2016-11-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Pneus neige + vidange',
            'amount' => '3792',
            'date' => '2016-11-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Locomotive Élie',
            'amount' => '249',
            'date' => '2016-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2016-11-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '63',
            'date' => '2016-11-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Impression photos',
            'amount' => '119',
            'date' => '2016-11-29',
        ]);
    }

    public function december()
    {
        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer decembre',
            'amount' => '6800',
            'date' => '2016-12-01',
        ]);
    }
}
