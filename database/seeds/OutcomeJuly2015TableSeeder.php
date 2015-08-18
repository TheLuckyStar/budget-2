<?php

use App\Outcome;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OutcomeJuly2015TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runEnvelope1();
        $this->runEnvelope2();
        $this->runEnvelope3();
        $this->runEnvelope4();
        $this->runEnvelope5();
        $this->runEnvelope6();
        $this->runEnvelope7();
        $this->runEnvelope8();
        $this->runEnvelope9();
        $this->runEnvelope10();
        $this->runEnvelope11();
        $this->runEnvelope12();
        $this->runEnvelope13();
        $this->runEnvelope14();
    }

    /**
     * Run the database seed for envelope "Logement" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope1() {
        Outcome::create([
            'envelope_id' => 1,
            'name' => "Loyer",
            'amount' => 700,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Assurance habitation",
            'amount' => 25.66,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Free Mobile",
            'amount' => 2,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Freebox",
            'amount' => 32.98,
            'date' => Carbon::create(2015, 7, 8, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Cage pour Chippie",
            'amount' => 10,
            'date' => Carbon::create(2015, 7, 23, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Transport" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope2() {
        Outcome::create([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 55.47,
            'date' => Carbon::create(2015, 7, 1, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Train (Lille - Le Quesnoy)",
            'amount' => 3.20,
            'date' => Carbon::create(2015, 7, 2, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 15.02,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Assurance voiture",
            'amount' => 25.66,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Abonnement Transpole Simon",
            'amount' => 28,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Train (Lille - Templeuve)",
            'amount' => 1.20,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Train (Lille - Templeuve)",
            'amount' => 1.20,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 55.96,
            'date' => Carbon::create(2015, 7, 17, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Train (Lille - Orchies)",
            'amount' => 3.20,
            'date' => Carbon::create(2015, 7, 23, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Quotidien" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope3() {
        Outcome::create([
            'envelope_id' => 3,
            'name' => "Harmonie nature",
            'amount' => 16.60,
            'date' => Carbon::create(2015, 7, 1, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 24.76,
            'date' => Carbon::create(2015, 7, 1, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 41.89,
            'date' => Carbon::create(2015, 7, 1, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 55.82,
            'date' => Carbon::create(2015, 7, 1, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 6.50,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Biocoop",
            'amount' => 18.12,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Sandwich Imaginarium",
            'amount' => 3.5,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Pizzas (remboursement commande Body Nature)",
            'amount' => 10,
            'date' => Carbon::create(2015, 7, 9, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 7.44,
            'date' => Carbon::create(2015, 7, 10, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 12.40,
            'date' => Carbon::create(2015, 7, 13, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Weekend à Hurdegaryp",
            'amount' => 52.19,
            'date' => Carbon::create(2015, 7, 13, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Biocoop",
            'amount' => 19.55,
            'date' => Carbon::create(2015, 7, 13, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 38.06,
            'date' => Carbon::create(2015, 7, 13, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Weekend à Hurdegaryp",
            'amount' => 22.53,
            'date' => Carbon::create(2015, 7, 16, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Weekend à Hurdegaryp",
            'amount' => 30,
            'date' => Carbon::create(2015, 7, 16, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 19.85,
            'date' => Carbon::create(2015, 7, 17, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 93.91,
            'date' => Carbon::create(2015, 7, 17, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Bio C Bon",
            'amount' => 15.41,
            'date' => Carbon::create(2015, 7, 20, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 34.38,
            'date' => Carbon::create(2015, 7, 20, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 56.29,
            'date' => Carbon::create(2015, 7, 21, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Bébé au naturel",
            'amount' => 76.69,
            'date' => Carbon::create(2015, 7, 22, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Retrait en liquide",
            'amount' => 70,
            'date' => Carbon::create(2015, 7, 23, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 18.10,
            'date' => Carbon::create(2015, 7, 27, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Épinature",
            'amount' => 12.52,
            'date' => Carbon::create(2015, 7, 29, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Commande Body Nature (remboursée en liquide)",
            'amount' => 33.05,
            'date' => Carbon::create(2015, 7, 30, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 11.67,
            'date' => Carbon::create(2015, 7, 30, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Intermarché",
            'amount' => 15.14,
            'date' => Carbon::create(2015, 7, 31, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Soins & santé" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope4() {
        Outcome::create([
            'envelope_id' => 4,
            'name' => "Mutuelle Simon & Élie",
            'amount' => 65.91,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 4,
            'name' => "Mutuelle Delphine",
            'amount' => 51.31,
            'date' => Carbon::create(2015, 7, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 4,
            'name' => "Reflet du Soleil",
            'amount' => 61,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 4,
            'name' => "Coiffeur Arc-en-Ciel",
            'amount' => 39.50,
            'date' => Carbon::create(2015, 7, 9, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Vêtements" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope5() {
        Outcome::create([
            'envelope_id' => 5,
            'name' => "Soldes Brice (Simon)",
            'amount' => 121.84,
            'date' => Carbon::create(2015, 7, 27, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Culture & Loisirs" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope6() {
    }

    /**
     * Run the database seed for envelope "Cadeaux" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope7() {
        Outcome::create([
            'envelope_id' => 7,
            'name' => "Anniversaire Odile",
            'amount' => 12,
            'date' => Carbon::create(2015, 7, 2, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 7,
            'name' => "Anniversaire Marie-Agnès",
            'amount' => 10,
            'date' => Carbon::create(2015, 7, 9, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 7,
            'name' => "Anniversaire Pierre-Louis & crémaillère",
            'amount' => 19.49,
            'date' => Carbon::create(2015, 7, 20, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Vacances" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope8() {
        Outcome::create([
            'envelope_id' => 8,
            'name' => "Weekend à Hurdegaryp - Airbnb",
            'amount' => 137,
            'date' => Carbon::create(2015, 7, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Weekend à Hurdegaryp - Essence",
            'amount' => 30.33,
            'date' => Carbon::create(2015, 7, 13, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Weekend à Hurdegaryp - Culture & Loisirs",
            'amount' => 60,
            'date' => Carbon::create(2015, 7, 15, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Weekend à Hurdegaryp - Essence",
            'amount' => 30.01,
            'date' => Carbon::create(2015, 7, 16, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Semaine en Bretagne - Airbnb",
            'amount' => 28,
            'date' => Carbon::create(2015, 7, 27, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Semaine en Bretagne - Essence",
            'amount' => 33.82,
            'date' => Carbon::create(2015, 7, 27, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Semaine en Bretagne - Essence",
            'amount' => 55.50,
            'date' => Carbon::create(2015, 7, 28, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 8,
            'name' => "Semaine en Bretagne - Airbnb",
            'amount' => 30,
            'date' => Carbon::create(2015, 7, 31, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Impôts" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope9() {
    }

    /**
     * Run the database seed for envelope "DU Droit des étrangers" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope10() {
        Outcome::create([
            'envelope_id' => 10,
            'name' => "Frais de déplacement Émilie (remboursement commande Body Nature)",
            'amount' => 9.95,
            'date' => Carbon::create(2015, 7, 9, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 241,
            'date' => Carbon::create(2015, 7, 21, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 64,
            'date' => Carbon::create(2015, 7, 22, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 7, 27, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Logement" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope11() {
        Outcome::create([
            'envelope_id' => 11,
            'name' => "Bed & Breakfast Edimburg",
            'amount' => 150,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 11,
            'name' => "Bed & Breakfast Dufftown",
            'amount' => 150,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 11,
            'name' => "Bed & Breakfast Wick",
            'amount' => 150,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 11,
            'name' => "Bed & Breakfast Ullapool",
            'amount' => 150,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 11,
            'name' => "Bed & Breakfast Arrochar",
            'amount' => 150,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);
    }

    /**
     * Run the database seed for envelope "Transport" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope12() {
        Outcome::create([
            'envelope_id' => 12,
            'name' => "Shuttle",
            'amount' => 100,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 12,
            'name' => "Essence",
            'amount' => 100,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);
    }

    /**
     * Run the database seed for envelope "Quotidien" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope13() {
        Outcome::create([
            'envelope_id' => 13,
            'name' => "Quotidien",
            'amount' => 300,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);
    }

    /**
     * Run the database seed for envelope "Sorties" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope14() {
        Outcome::create([
            'envelope_id' => 14,
            'name' => "Museum of Childhood",
            'amount' => 15,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 14,
            'name' => "Bateau Loch Lomond",
            'amount' => 30,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 14,
            'name' => "Château d'Inveraray",
            'amount' => 20,
            'date' => Carbon::create(2015, 10, 1, 0),
            'effective' => 0,
        ]);
    }

}
