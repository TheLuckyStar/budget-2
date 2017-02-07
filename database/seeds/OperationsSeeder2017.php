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
        $this->february();
    }

    public function january()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire janvier',
            'amount' => '29236',
            'date' => '2017-01-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations janvier',
            'amount' => '1050',
            'date' => '2017-01-01',
        ]);

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
            'name' => 'Train Philippe & Jeanne-Marie (remboursement faire-part)',
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
            'name' => 'Train Pierre-Louis & François (remboursement faire-part)',
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

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '518',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Amende stationnement',
            'amount' => '400',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Max',
            'amount' => '112',
            'date' => '2017-01-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '30',
            'date' => '2017-01-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '30',
            'date' => '2017-01-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Commande Clearlife',
            'amount' => '660',
            'date' => '2017-01-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '359.20',
            'date' => '2017-01-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Électricité 2016',
            'amount' => '1836',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '289',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Chaussures Simon',
            'amount' => '600',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Ikea : cuisine Élie',
            'amount' => '799',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Ikea : plante + fermoirs + lampes',
            'amount' => '256',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Ikea : papier cadeau + pailles',
            'amount' => '28',
            'date' => '2017-01-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Plastifieuse + feuilles',
            'amount' => '499.70',
            'date' => '2017-01-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Grille-pain',
            'amount' => '319',
            'date' => '2017-01-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Film occultant',
            'amount' => '49.90',
            'date' => '2017-01-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1765.85',
            'date' => '2017-01-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École Janvier',
            'amount' => '600',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau anniversaire enfants',
            'amount' => '137',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant asiatique',
            'amount' => '405',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Pain coop',
            'amount' => '48',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Jus de canneberge',
            'amount' => '89',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '25',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Impressions',
            'amount' => '8',
            'date' => '2017-01-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-01-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '554.61',
            'date' => '2017-01-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas Église (patinoire)',
            'amount' => '308',
            'date' => '2017-01-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1566.94',
            'date' => '2017-01-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-01-30',
        ]);
    }

    public function february()
    {
        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer février',
            'amount' => '6800',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Timbres',
            'amount' => '260',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Photos faire-part',
            'amount' => '562',
            'date' => '2017-02-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Patins Simon',
            'amount' => '399',
            'date' => '2017-02-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Alcool',
            'amount' => '69',
            'date' => '2017-02-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA (liquide)',
            'amount' => '1040',
            'date' => '2017-01-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA (CB)',
            'amount' => '280.17',
            'date' => '2017-02-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Patinoire Glimåkra',
            'amount' => '10',
            'date' => '2017-02-05',
        ]);
    }
}
