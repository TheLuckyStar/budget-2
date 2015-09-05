<?php

use App\Outcome;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OutcomeAugust2015TableSeeder extends Seeder
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
    }

    /**
     * Run the database seed for envelope "Logement" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope1() {
        Outcome::create([
            'envelope_id' => 1,
            'name' => "Assurance habitation",
            'amount' => 16.25,
            'date' => Carbon::create(2015, 8, 5, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Loyer",
            'amount' => 700,
            'date' => Carbon::create(2015, 8, 5, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Free Mobile",
            'amount' => 2,
            'date' => Carbon::create(2015, 8, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "Freebox",
            'amount' => 33.15,
            'date' => Carbon::create(2015, 8, 10, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 1,
            'name' => "EDF",
            'amount' => 82.81,
            'date' => Carbon::create(2015, 8, 20, 0),
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
            'name' => "Assurance voiture",
            'amount' => 32.26,
            'date' => Carbon::create(2015, 8, 5, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 58,
            'date' => Carbon::create(2015, 8, 7, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Abonnement Transpole Simon",
            'amount' => 28,
            'date' => Carbon::create(2015, 8, 18, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 39.81,
            'date' => Carbon::create(2015, 8, 24, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 2,
            'name' => "Tickets Transpole Johan",
            'amount' => 3,
            'date' => Carbon::create(2015, 8, 31, 0),
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
            'name' => "Semaine en Bretagne - Boucherie",
            'amount' => 27.36,
            'date' => Carbon::create(2015, 8, 3, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Intermarché",
            'amount' => 23.04,
            'date' => Carbon::create(2015, 8, 3, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 84.09,
            'date' => Carbon::create(2015, 8, 4, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 28.12,
            'date' => Carbon::create(2015, 8, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 10.63,
            'date' => Carbon::create(2015, 8, 11, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 37.74,
            'date' => Carbon::create(2015, 8, 12, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Friterie",
            'amount' => 44.20,
            'date' => Carbon::create(2015, 8, 11, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 47.81,
            'date' => Carbon::create(2015, 8, 11, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Intermarché",
            'amount' => 87.32,
            'date' => Carbon::create(2015, 8, 12, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 26.60,
            'date' => Carbon::create(2015, 8, 18, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 57.18,
            'date' => Carbon::create(2015, 8, 19, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 3.96,
            'date' => Carbon::create(2015, 8, 20, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 98.51,
            'date' => Carbon::create(2015, 8, 21, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Label Vie",
            'amount' => 98.52,
            'date' => Carbon::create(2015, 8, 21, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 57.67,
            'date' => Carbon::create(2015, 8, 25, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 9.40,
            'date' => Carbon::create(2015, 8, 26, 0),
            'effective' => 0,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Carrefour",
            'amount' => 8.19,
            'date' => Carbon::create(2015, 8, 31, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 3,
            'name' => "Ferme Delemotte",
            'amount' => 18.15,
            'date' => Carbon::create(2015, 8, 31, 0),
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
            'date' => Carbon::create(2015, 8, 5, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 4,
            'name' => "Mutuelle Delphine",
            'amount' => 54.12,
            'date' => Carbon::create(2015, 8, 5, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 4,
            'name' => "Pharmacie (HE)",
            'amount' => 12,
            'date' => Carbon::create(2015, 8, 31, 0),
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
            'name' => "Vêtements Delphine",
            'amount' => 26.99,
            'date' => Carbon::create(2015, 8, 11, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Culture & Loisirs" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope6() {
        Outcome::create([
            'envelope_id' => 6,
            'name' => "Steam",
            'amount' => 8.36,
            'date' => Carbon::create(2015, 8, 3, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 6,
            'name' => "Disques dur externes",
            'amount' => 206.38,
            'date' => Carbon::create(2015, 8, 20, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Cadeaux" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope7() {
        Outcome::create([
            'envelope_id' => 7,
            'name' => "Anniversaire Johan",
            'amount' => 10.46,
            'date' => Carbon::create(2015, 8, 4, 0),
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
            'name' => "Semaine en Bretagne - Restaurant",
            'amount' => 16.40,
            'date' => Carbon::create(2015, 8, 3, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Impôts" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope9() {
        Outcome::create([
            'envelope_id' => 9,
            'name' => "Paiement RSI",
            'amount' => 524,
            'date' => Carbon::create(2015, 8, 3, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "DU Droit des étrangers" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope10() {
        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 6, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 10, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 14, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 17, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 20, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 24, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 27, 0),
            'effective' => 1,
        ]);

        Outcome::create([
            'envelope_id' => 10,
            'name' => "Train",
            'amount' => 25,
            'date' => Carbon::create(2015, 8, 31, 0),
            'effective' => 1,
        ]);
    }

    /**
     * Run the database seed for envelope "Logement" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope11() {

    }

    /**
     * Run the database seed for envelope "Transport" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope12() {

    }

    /**
     * Run the database seed for envelope "Quotidien" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope13() {

    }

    /**
     * Run the database seed for envelope "Sorties" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope14() {

    }

}
