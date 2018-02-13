<?php

use App\Outcome;
use App\Revenue;
use Illuminate\Database\Seeder;

class OperationsSeeder2018 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->january();
        $this->february();
    }

    public function january()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire janvier',
            'amount' => '32162',
            'date' => '2018-01-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités',
            'amount' => '2145',
            'date' => '2018-01-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations Janvier',
            'amount' => '2250',
            'date' => '2018-01-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer janvier',
            'amount' => '7000',
            'date' => '2018-01-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Annonce Blocket',
            'amount' => '20',
            'date' => '2018-01-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance janvier',
            'amount' => '394',
            'date' => '2018-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'Logiciels: Steam',
            'amount' => '123.02',
            'date' => '2018-01-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Pinces Laïs',
            'amount' => '110',
            'date' => '2018-01-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Cadeaux Laïs',
            'amount' => '405',
            'date' => '2018-01-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '329',
            'date' => '2018-01-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau Noël Pierre-Louis',
            'amount' => '140',
            'date' => '2018-01-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => 'Taxe voiture',
            'amount' => '584',
            'date' => '2018-01-07',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Remboursement dépenses pro',
            'amount' => '264',
            'date' => '2018-01-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '80',
            'date' => '2018-01-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Simon',
            'amount' => '89',
            'date' => '2018-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Électricité janvier',
            'amount' => '1194',
            'date' => '2018-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Musée Malmö',
            'amount' => '80',
            'date' => '2018-01-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Cadeau Simon Jeu',
            'amount' => '317',
            'date' => '2018-01-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'GW LSDA: Rangers',
            'amount' => '273.92',
            'date' => '2018-01-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'GW LSDA: Les deux tours',
            'amount' => '118.01',
            'date' => '2018-01-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'GW LSDA: Guerriers Minas Tirith',
            'amount' => '297.58',
            'date' => '2018-01-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2018-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2018-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Envoi cartes de voeux',
            'amount' => '225',
            'date' => '2018-01-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => 'Contrôle technique',
            'amount' => '699',
            'date' => '2018-01-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Envoi cartes de voeux',
            'amount' => '99',
            'date' => '2018-01-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Fika',
            'amount' => '87',
            'date' => '2018-01-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2018-01-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Chaussures + chaussettes enfants',
            'amount' => '578',
            'date' => '2018-01-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lessive',
            'amount' => '376',
            'date' => '2018-01-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Timbres',
            'amount' => '18',
            'date' => '2018-01-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Fika Hockey',
            'amount' => '65',
            'date' => '2018-01-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas Breanas',
            'amount' => '228',
            'date' => '2018-01-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2018-01-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '199',
            'date' => '2018-01-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École janvier',
            'amount' => '192',
            'date' => '2018-01-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Apotea',
            'amount' => '263',
            'date' => '2018-01-31',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '297.15',
            'date' => '2018-01-31',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2018-01-31',
        ]);
    }

    public function february()
    {
        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer février',
            'amount' => '7000',
            'date' => '2018-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance février',
            'amount' => '356',
            'date' => '2018-02-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Timbres',
            'amount' => '12',
            'date' => '2018-02-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Cours de natation Élie',
            'amount' => '500',
            'date' => '2018-02-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Envoi cadeaux',
            'amount' => '173',
            'date' => '2018-02-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '329',
            'date' => '2018-02-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '30',
            'date' => '2018-02-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '25.95',
            'date' => '2018-02-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Fika',
            'amount' => '22',
            'date' => '2018-02-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'GW LSDA : Nazgûls',
            'amount' => '896.70',
            'date' => '2018-02-13',
        ]);
    }
}
