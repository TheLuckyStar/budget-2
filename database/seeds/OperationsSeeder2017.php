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
        $this->march();
        $this->april();
        $this->may();
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
            'name' => 'Assurance voiture décembre & janvier',
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
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire février',
            'amount' => '20076.35',
            'date' => '2017-02-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Congé paternité',
            'amount' => '7122',
            'date' => '2017-02-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations février',
            'amount' => '2251',
            'date' => '2017-02-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Indermnités transport',
            'amount' => '609.65',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer février',
            'amount' => '6800',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture février',
            'amount' => '392',
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

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '65.40',
            'date' => '2017-01-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Lekoseum season ticket',
            'amount' => '450',
            'date' => '2017-02-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Lekoseum',
            'amount' => '105',
            'date' => '2017-02-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Tapis puzzle',
            'amount' => '145',
            'date' => '2017-02-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '732',
            'date' => '2017-02-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Accouchement',
            'amount' => '300',
            'date' => '2017-02-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '524.10',
            'date' => '2017-02-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Max',
            'amount' => '299',
            'date' => '2017-02-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '645',
            'date' => '2017-02-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => 'Sièges voiture',
            'amount' => '800',
            'date' => '2017-02-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École février',
            'amount' => '600',
            'date' => '2017-02-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '5',
            'date' => '2017-02-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant ICA',
            'amount' => '115',
            'date' => '2017-02-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1790.09',
            'date' => '2017-02-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '30',
            'date' => '2017-02-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-02-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '563',
            'date' => '2017-02-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '527.53',
            'date' => '2017-02-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '66.80',
            'date' => '2017-02-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '30',
            'date' => '2017-02-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Bodystore',
            'amount' => '1163.65',
            'date' => '2017-02-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Bodystore',
            'amount' => '557.05',
            'date' => '2017-02-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-02-28',
        ]);
    }

    public function march()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire mars',
            'amount' => '27672',
            'date' => '2017-03-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer mars',
            'amount' => '6800',
            'date' => '2017-03-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations mars',
            'amount' => '2250',
            'date' => '2017-03-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture mars',
            'amount' => '392',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture avril',
            'amount' => '392',
            'date' => '2017-02-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches',
            'amount' => '102',
            'date' => '2017-03-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-03-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lekoseum',
            'amount' => '50',
            'date' => '2017-03-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '2084.53',
            'date' => '2017-03-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'OVPN',
            'amount' => '177',
            'date' => '2017-03-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Crème impetigo Élie',
            'amount' => '129',
            'date' => '2017-03-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Loppis Élie & Laïs',
            'amount' => '460',
            'date' => '2017-03-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '664.97',
            'date' => '2017-03-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Élie',
            'amount' => '92',
            'date' => '2017-03-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Poches à douilles',
            'amount' => '49.90',
            'date' => '2017-03-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Agenda + correcteur',
            'amount' => '59.80',
            'date' => '2017-03-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '538',
            'date' => '2017-03-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone portable',
            'amount' => '207',
            'date' => '2017-03-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '30',
            'date' => '2017-03-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École Mars',
            'amount' => '600',
            'date' => '2017-03-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lekoseum',
            'amount' => '50',
            'date' => '2017-03-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '510.06',
            'date' => '2017-03-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '916.19',
            'date' => '2017-03-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Huile de massage',
            'amount' => '149',
            'date' => '2017-03-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-03-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 54,
            'name' => 'Aller-retour Ryanair Juin 2017',
            'amount' => '2819.21',
            'date' => '2017-03-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-03-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Pansements',
            'amount' => '25.90',
            'date' => '2017-01-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '2379.51',
            'date' => '2017-03-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-03-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-03-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Envoi ambassade',
            'amount' => '179',
            'date' => '2017-03-31',
        ]);
    }

    public function april()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire avril',
            'amount' => '28602',
            'date' => '2017-04-25',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations avril',
            'amount' => '2250',
            'date' => '2017-04-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer avril',
            'amount' => '7000',
            'date' => '2017-04-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture mai',
            'amount' => '402',
            'date' => '2017-04-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture mai-octobre',
            'amount' => '2015',
            'date' => '2017-04-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lekoseum',
            'amount' => '60',
            'date' => '2017-04-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '567.05',
            'date' => '2017-04-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Électricité 2017 Q1',
            'amount' => '1068',
            'date' => '2017-04-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '497',
            'date' => '2017-04-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Élie',
            'amount' => '184',
            'date' => '2017-04-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Fleurs Anne',
            'amount' => '59.90',
            'date' => '2017-04-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gouter Lekoseum',
            'amount' => '50',
            'date' => '2017-04-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Mobilier occasion Hanaskog',
            'amount' => '360',
            'date' => '2017-04-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '1088.30',
            'date' => '2017-04-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Bellas Place',
            'amount' => '497',
            'date' => '2017-04-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Bus François (remboursement cadeau)',
            'amount' => '88',
            'date' => '2017-04-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Fika François (remboursement cadeau)',
            'amount' => '43',
            'date' => '2017-04-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Wanas Cafe',
            'amount' => '309',
            'date' => '2017-04-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Train François (remboursement cadeau)',
            'amount' => '140',
            'date' => '2017-04-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '2403.31',
            'date' => '2017-04-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '514.96',
            'date' => '2017-04-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '177',
            'date' => '2017-04-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-04-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Pochettes plastifieuse + pochette CD',
            'amount' => '129.70',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Retrait DAB',
            'amount' => '148',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cartes anniversaire',
            'amount' => '52',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '417.89',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '29.95',
            'date' => '2017-04-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Max Halmstad',
            'amount' => '191',
            'date' => '2017-04-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Universeum Göteborg',
            'amount' => '515',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Carburant Göteborg',
            'amount' => '509.61',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch Göteborg',
            'amount' => '338',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'iMac',
            'amount' => '5500',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau Dobble',
            'amount' => '129',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Parking Göteborg',
            'amount' => '80',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École avril',
            'amount' => '1150',
            'date' => '2017-04-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '308.77',
            'date' => '2017-04-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-04-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Universeum',
            'amount' => '313',
            'date' => '2017-04-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-04-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Commande Bodystore',
            'amount' => '748',
            'date' => '2017-04-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '814.24',
            'date' => '2017-04-30',
        ]);
    }

    public function may()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations mai',
            'amount' => '2250',
            'date' => '2017-05-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer mai',
            'amount' => '7000',
            'date' => '2017-04-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Élie',
            'amount' => '184',
            'date' => '2017-05-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Huile massage',
            'amount' => '149',
            'date' => '2017-05-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-05-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '727.70',
            'date' => '2017-05-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '125.95',
            'date' => '2017-05-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Max',
            'amount' => '251',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Livre Nathan',
            'amount' => '33',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Livre Élie',
            'amount' => '67',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Gekås ustensiles',
            'amount' => '476.80',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Gekås vêtements',
            'amount' => '199.80',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Gekås loisirs',
            'amount' => '710.85',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Gekås cadeaux',
            'amount' => '533.80',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '35',
            'date' => '2017-05-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 8,
            'name' => 'Carburant',
            'amount' => '507.64',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Rosegarden buffet',
            'amount' => '229',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Chaussures Élie',
            'amount' => '299',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Gekås loisirs',
            'amount' => '62.75',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Gekås vêtements',
            'amount' => '1998.35',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Gekås cadeaux',
            'amount' => '463.80',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Gekås loisirs',
            'amount' => '835.90',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Gekås vêtments',
            'amount' => '89.90',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Gekås décorations',
            'amount' => '86.90',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Gekås salladbar',
            'amount' => '137.97',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch Göteborg',
            'amount' => '470',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Panduro cadeaux',
            'amount' => '129',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Panduro loisirs',
            'amount' => '228',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe avril',
            'amount' => '594',
            'date' => '2017-05-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-05-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '24',
            'date' => '2017-05-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lekoseum',
            'amount' => '55',
            'date' => '2017-05-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Grille pain',
            'amount' => '80',
            'date' => '2017-05-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '2398.64',
            'date' => '2017-05-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '42.50',
            'date' => '2017-05-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Photos d\'identité',
            'amount' => '199',
            'date' => '2017-05-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '488',
            'date' => '2017-05-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-05-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '15',
            'date' => '2017-05-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-05-18',
        ]);
    }
}
