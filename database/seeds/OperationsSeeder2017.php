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
        $this->june();
        $this->jully();
        $this->august();
        $this->september();
        $this->october();
        $this->november();
        $this->december();
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
            'name' => 'Assurance voiture avril',
            'amount' => '392',
            'date' => '2017-03-01',
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
            'envelope_id' => 6,
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
            'name' => 'Salaire mai',
            'amount' => '27095',
            'date' => '2017-05-01',
        ]);

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
            'date' => '2017-05-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture mai',
            'amount' => '402',
            'date' => '2017-05-01',
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

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone portable avril',
            'amount' => '238',
            'date' => '2017-05-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École mai',
            'amount' => '900',
            'date' => '2017-05-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Train Hässleholm',
            'amount' => '51',
            'date' => '2017-05-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '479.15',
            'date' => '2017-05-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Sandalettes Élie',
            'amount' => '244',
            'date' => '2017-05-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Envoi passeport Laïs',
            'amount' => '97',
            'date' => '2017-05-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '763.77',
            'date' => '2017-05-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '120.70',
            'date' => '2017-05-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Réparation tondeuse',
            'amount' => '101',
            'date' => '2017-05-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '588.40',
            'date' => '2017-05-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-05-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeaux torchons',
            'amount' => '216.85',
            'date' => '2017-05-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Passeport Laïs',
            'amount' => '257',
            'date' => '2017-05-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '5',
            'date' => '2017-05-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Péage Göteborg',
            'amount' => '25',
            'date' => '2017-05-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Casquette + Bob Élie',
            'amount' => '118',
            'date' => '2017-05-31',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Timbres',
            'amount' => '20',
            'date' => '2017-05-31',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '10',
            'date' => '2017-05-31',
        ]);
    }

    public function june()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire juin',
            'amount' => '29227',
            'date' => '2017-06-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations juin',
            'amount' => '2250',
            'date' => '2017-06-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer juin',
            'amount' => '7000',
            'date' => '2017-06-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture juin',
            'amount' => '402',
            'date' => '2017-06-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-06-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '172.77',
            'date' => '2017-06-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Ferme tomates + concombres',
            'amount' => '130',
            'date' => '2017-06-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1700.17',
            'date' => '2017-06-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Films plastifieuse',
            'amount' => '119.70',
            'date' => '2017-06-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => "Biltema : tuyau d'arrosage",
            'amount' => '359.30',
            'date' => '2017-06-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => "Biltema : piscine",
            'amount' => '179',
            'date' => '2017-06-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => "Biltema : vélo + pares-soleil",
            'amount' => '99.7',
            'date' => '2017-06-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '329',
            'date' => '2017-06-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '800.14',
            'date' => '2017-06-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Retrait DAB',
            'amount' => '276.05',
            'date' => '2017-06-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeaux école Élie',
            'amount' => '53.95',
            'date' => '2017-06-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau Fred',
            'amount' => '100',
            'date' => '2017-06-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Terreau',
            'amount' => '70',
            'date' => '2017-06-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Jojo Sommar',
            'amount' => '1350',
            'date' => '2017-06-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 54,
            'name' => 'Train Malmö - Kopenhague',
            'amount' => '396',
            'date' => '2017-06-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas Simon',
            'amount' => '63.22',
            'date' => '2017-06-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Cubus Delphine',
            'amount' => '896',
            'date' => '2017-06-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Draisienne',
            'amount' => '499',
            'date' => '2017-06-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Plantes',
            'amount' => '100',
            'date' => '2017-06-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Lekoseum',
            'amount' => '55',
            'date' => '2017-06-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau Maélie',
            'amount' => '39',
            'date' => '2017-06-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais de consulat',
            'amount' => '80',
            'date' => '2017-06-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-06-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '508.69',
            'date' => '2017-06-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Paracétamol',
            'amount' => '128.70',
            'date' => '2017-06-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Brunch',
            'amount' => '520',
            'date' => '2017-06-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École juin',
            'amount' => '900',
            'date' => '2017-06-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '37',
            'date' => '2017-06-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '281.70',
            'date' => '2017-06-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '690.72',
            'date' => '2017-06-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-06-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone portable',
            'amount' => '199',
            'date' => '2017-06-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Pochettes plastifieuse',
            'amount' => '119.70',
            'date' => '2017-06-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 54,
            'name' => 'Valise',
            'amount' => '299',
            'date' => '2017-06-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau de mariage',
            'amount' => '300',
            'date' => '2017-06-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '82.30',
            'date' => '2017-06-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Chocolats Henri',
            'amount' => '75',
            'date' => '2017-06-30',
        ]);
    }

    public function jully()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire juillet',
            'amount' => '28276',
            'date' => '2017-07-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations juillet',
            'amount' => '2250',
            'date' => '2017-07-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer juillet',
            'amount' => '7000',
            'date' => '2017-07-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture juillet',
            'amount' => '402',
            'date' => '2017-07-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '329',
            'date' => '2017-07-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Sandwiches Copenhagen',
            'amount' => '193.62',
            'date' => '2017-07-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Eau Copenhagen',
            'amount' => '54.66',
            'date' => '2017-07-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Dentiste Delphine',
            'amount' => '820',
            'date' => '2017-07-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '991.91',
            'date' => '2017-07-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Électricité 2017 Q2',
            'amount' => '1062',
            'date' => '2017-07-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Bodystore',
            'amount' => '435.60',
            'date' => '2017-07-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Activités Bibelcamp',
            'amount' => '500',
            'date' => '2017-07-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas Bibelcamp',
            'amount' => '400',
            'date' => '2017-07-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Lekoseum',
            'amount' => '55',
            'date' => '2017-07-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '1002.97',
            'date' => '2017-07-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Timbres',
            'amount' => '210',
            'date' => '2017-07-16',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Élie',
            'amount' => '184',
            'date' => '2017-07-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Huile de massage',
            'amount' => '159',
            'date' => '2017-07-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Musée Malmö',
            'amount' => '80',
            'date' => '2017-07-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lessive',
            'amount' => '357',
            'date' => '2017-07-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-07-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '32.95',
            'date' => '2017-07-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École Juillet',
            'amount' => '1020',
            'date' => '2017-07-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Livre Bibelcamp',
            'amount' => '69',
            'date' => '2017-07-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '81.75',
            'date' => '2017-07-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '31.50',
            'date' => '2017-07-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '574.76',
            'date' => '2017-07-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '126.90',
            'date' => '2017-07-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '45.90',
            'date' => '2017-07-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '107.90',
            'date' => '2017-07-23',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '711.10',
            'date' => '2017-07-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-07-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '199',
            'date' => '2017-07-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lekoseum',
            'amount' => '75',
            'date' => '2017-07-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates + concombre',
            'amount' => '135',
            'date' => '2017-07-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '815.36',
            'date' => '2017-07-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Parc',
            'amount' => '200',
            'date' => '2017-07-31',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations juillet',
            'amount' => '3900',
            'date' => '2017-07-31',
        ]);
    }

    public function august()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire août',
            'amount' => '29577',
            'date' => '2017-08-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations août',
            'amount' => '2250',
            'date' => '2017-08-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités août',
            'amount' => '6045',
            'date' => '2017-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer août',
            'amount' => '7000',
            'date' => '2017-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture août',
            'amount' => '402',
            'date' => '2017-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Ikea',
            'amount' => '45',
            'date' => '2017-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Minuteur + plante',
            'amount' => '47',
            'date' => '2017-08-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Kristianstad',
            'amount' => '32',
            'date' => '2017-08-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '77.95',
            'date' => '2017-08-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau chocolats',
            'amount' => '58.45',
            'date' => '2017-08-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'Train Philippe & Jeanne-Marie',
            'amount' => '824',
            'date' => '2017-08-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Marché',
            'amount' => '176',
            'date' => '2017-08-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates',
            'amount' => '120',
            'date' => '2017-08-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '932.21',
            'date' => '2017-08-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Lekoseum',
            'amount' => '75',
            'date' => '2017-08-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Accès Internet',
            'amount' => '329',
            'date' => '2017-08-08',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Remboursement impôts',
            'amount' => '7470',
            'date' => '2017-08-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Fournitures Clas Ohlson',
            'amount' => '109.80',
            'date' => '2017-08-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Fournitures Panduro',
            'amount' => '144.80',
            'date' => '2017-08-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter',
            'amount' => '32',
            'date' => '2017-08-10',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter',
            'amount' => '79',
            'date' => '2017-08-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '3064.45',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '51.90',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Lekoseum',
            'amount' => '65',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 39,
            'name' => 'Biltema',
            'amount' => '124.60',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates',
            'amount' => '130',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '562.65',
            'date' => '2017-08-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Consultation Delphine',
            'amount' => '250',
            'date' => '2017-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '30',
            'date' => '2017-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Apotea',
            'amount' => '892',
            'date' => '2017-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Couches Èlie',
            'amount' => '184',
            'date' => '2017-08-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter',
            'amount' => '24',
            'date' => '2017-08-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Livre autocollants',
            'amount' => '59',
            'date' => '2017-08-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter',
            'amount' => '45',
            'date' => '2017-08-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-08-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-08-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates',
            'amount' => '125',
            'date' => '2017-08-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '760.43',
            'date' => '2017-08-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Retrait DAB',
            'amount' => '200',
            'date' => '2017-08-20',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 15,
            'name' => 'École Août',
            'amount' => '852',
            'date' => '2017-08-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates',
            'amount' => '150',
            'date' => '2017-08-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loppis - Maison',
            'amount' => '300',
            'date' => '2017-08-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 54,
            'name' => 'Loppis - Valise Élie',
            'amount' => '150',
            'date' => '2017-08-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '1290.49',
            'date' => '2017-08-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter',
            'amount' => '55',
            'date' => '2017-08-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone portable',
            'amount' => '199',
            'date' => '2017-08-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-08-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Robe Delphine',
            'amount' => '699.99',
            'date' => '2017-08-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '16',
            'date' => '2017-08-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Robot cuisine',
            'amount' => '569',
            'date' => '2017-08-29',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Carburant',
            'amount' => '550.02',
            'date' => '2017-08-30',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Restaurant Ikea',
            'amount' => '245',
            'date' => '2017-08-30',
        ]);
    }

    public function september()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire septembre',
            'amount' => '28755',
            'date' => '2017-09-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités',
            'amount' => '6045',
            'date' => '2017-09-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations septembre',
            'amount' => '2250',
            'date' => '2017-09-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer septembre',
            'amount' => '7000',
            'date' => '2017-09-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture septembre',
            'amount' => '402',
            'date' => '2017-09-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Tomates',
            'amount' => '125',
            'date' => '2017-09-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Coop',
            'amount' => '67.50',
            'date' => '2017-09-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '774.73',
            'date' => '2017-09-03',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Remboursements frais de déplacement',
            'amount' => '131',
            'date' => '2017-09-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Apotek',
            'amount' => '119',
            'date' => '2017-09-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '329',
            'date' => '2017-09-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Coop',
            'amount' => '73.45',
            'date' => '2017-09-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter musée',
            'amount' => '64',
            'date' => '2017-09-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Bus Delphine',
            'amount' => '200',
            'date' => '2017-09-08',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Duplos Blocket',
            'amount' => '900',
            'date' => '2017-09-09',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Legos Blocket',
            'amount' => '1500',
            'date' => '2017-09-09',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Dagersättning Simon',
            'amount' => '572',
            'date' => '2017-09-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Vêtements Cubus (Delphine & Laïs)',
            'amount' => '739.10',
            'date' => '2017-09-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Vêtements Cubus (cadeaux)',
            'amount' => '198',
            'date' => '2017-09-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Laine pour panier',
            'amount' => '64.90',
            'date' => '2017-09-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'RDV médical',
            'amount' => '250',
            'date' => '2017-09-12',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '51',
            'date' => '2017-09-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Veste réflechissante Élie',
            'amount' => '39.90',
            'date' => '2017-09-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '73.51',
            'date' => '2017-09-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeaux',
            'amount' => '372.20',
            'date' => '2017-09-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Stationnement',
            'amount' => '7',
            'date' => '2017-09-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Massage Delphine',
            'amount' => '620',
            'date' => '2017-09-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-09-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-09-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Pommade Simon',
            'amount' => '85',
            'date' => '2017-09-26',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Remboursement coque iPhone',
            'amount' => '59.9',
            'date' => '2017-09-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '208',
            'date' => '2017-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 4,
            'name' => 'Massage Simon',
            'amount' => '600',
            'date' => '2017-09-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Petit déjeuner Copenhagen',
            'amount' => '55.09',
            'date' => '2017-09-29',
        ]);
    }

    public function october()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire octobre',
            'amount' => '25944',
            'date' => '2017-10-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités',
            'amount' => '5850',
            'date' => '2017-10-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations octobre',
            'amount' => '2250',
            'date' => '2017-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer octobre',
            'amount' => '7000',
            'date' => '2017-10-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Remboursements frais de déplacement',
            'amount' => '138',
            'date' => '2017-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture octobre',
            'amount' => '407',
            'date' => '2017-10-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Lessive',
            'amount' => '595',
            'date' => '2017-10-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Apotea',
            'amount' => '361',
            'date' => '2017-10-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '329',
            'date' => '2017-10-05',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'iTunes',
            'amount' => '30',
            'date' => '2017-10-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Petits déjeuners Ängelholm',
            'amount' => '420',
            'date' => '2017-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'ICA',
            'amount' => '124.86',
            'date' => '2017-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Goûter Ängelholm',
            'amount' => '20',
            'date' => '2017-10-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-10-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Skånetrafiken Simon',
            'amount' => '700',
            'date' => '2017-10-19',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Électricité',
            'amount' => '1062',
            'date' => '2017-10-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => '8 sidor',
            'amount' => '850',
            'date' => '2017-10-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Annonce Blocket',
            'amount' => '60',
            'date' => '2017-10-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-10-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '199',
            'date' => '2017-10-30',
        ]);
    }

    public function november()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire novembre',
            'amount' => '25458',
            'date' => '2017-11-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités',
            'amount' => '6045',
            'date' => '2017-11-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations novembre',
            'amount' => '2250',
            'date' => '2017-11-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer novembre',
            'amount' => '7000',
            'date' => '2017-11-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance voiture novembre',
            'amount' => '380',
            'date' => '2017-11-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Remboursement coque OnePlus Five',
            'amount' => '145',
            'date' => '2017-11-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone fixe',
            'amount' => '329',
            'date' => '2017-11-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Imprimante',
            'amount' => '1849',
            'date' => '2017-11-07',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Kristianstad ishållen',
            'amount' => '135',
            'date' => '2017-11-11',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Porridge',
            'amount' => '179',
            'date' => '2017-11-13',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Bois tipi',
            'amount' => '1612',
            'date' => '2017-11-14',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-11-15',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-04-17',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 50,
            'name' => 'Crème nettoyante',
            'amount' => '116',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Commande apotea',
            'amount' => '519',
            'date' => '2017-04-21',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-11-22',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Pharmacie P',
            'amount' => '65',
            'date' => '2017-11-24',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loppis Décorations',
            'amount' => '40',
            'date' => '2017-11-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Loppis Fika',
            'amount' => '40',
            'date' => '2017-11-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Loppis Cadeau',
            'amount' => '25',
            'date' => '2017-11-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Patinoire',
            'amount' => '50',
            'date' => '2017-11-26',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau David',
            'amount' => '300',
            'date' => '2017-11-25',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Cadeau Exakta',
            'amount' => '50',
            'date' => '2017-11-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Biltema activités manuelles',
            'amount' => '39.90',
            'date' => '2017-11-27',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-11-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Telephone portable',
            'amount' => '200',
            'date' => '2017-11-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-11-29',
        ]);
    }

    public function december()
    {
        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Salaire décembre',
            'amount' => '26712',
            'date' => '2017-12-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Indemnités',
            'amount' => '5850',
            'date' => '2017-12-01',
        ]);

        Revenue::create([
            'account_id' => 12,
            'envelope_id' => null,
            'name' => 'Allocations décembre',
            'amount' => '2250',
            'date' => '2017-12-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Loyer décembre',
            'amount' => '7000',
            'date' => '2017-12-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 2,
            'name' => 'Assurance décembre',
            'amount' => '394',
            'date' => '2017-12-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 5,
            'name' => 'Cubusse',
            'amount' => '592.5',
            'date' => '2017-12-01',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Repas Breänas',
            'amount' => '350',
            'date' => '2017-12-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 7,
            'name' => 'Enchêres Breänas',
            'amount' => '480',
            'date' => '2017-12-02',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Machine à laver',
            'amount' => '5428',
            'date' => '2017-12-03',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Peluches',
            'amount' => '318',
            'date' => '2017-12-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 6,
            'name' => 'Brio builder',
            'amount' => '500',
            'date' => '2017-12-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 55,
            'name' => 'App owncloud news',
            'amount' => '24',
            'date' => '2017-12-04',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone fixe',
            'amount' => '329',
            'date' => '2017-12-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 3,
            'name' => 'Knislinge pastor',
            'amount' => '50',
            'date' => '2017-12-06',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Skype',
            'amount' => '30',
            'date' => '2017-12-18',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 9,
            'name' => 'Frais bancaires',
            'amount' => '39',
            'date' => '2017-12-28',
        ]);

        Outcome::create([
            'account_id' => 12,
            'envelope_id' => 1,
            'name' => 'Téléphone portable',
            'amount' => '199',
            'date' => '2017-12-28',
        ]);
    }
}
