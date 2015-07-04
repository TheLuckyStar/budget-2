<?php

use Illuminate\Database\Seeder;

class OutcomeTableSeeder extends Seeder
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
        DB::table('outcomes')->insert([
            'envelope_id' => 1,
            'name' => "Loyer",
            'amount' => 700,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Transport" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope2() {
        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Essence",
            'amount' => 55.47,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Train (Lille - Le Quesnoy)",
            'amount' => 3.20,
            'date' => mktime(0, 0, 0, 7, 2, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Nourriture" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope3() {
        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Bio Coop",
            'amount' => 16.60,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Carrefour",
            'amount' => 41.89,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Bio Coop",
            'amount' => 24.76,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 2,
            'name' => "Intermarché",
            'amount' => 55.82,
            'date' => mktime(0, 0, 0, 7, 1, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Soins & santé" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope4() {

    }

    /**
     * Run the database seed for envelope "Vêtements" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope5() {

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
        DB::table('outcomes')->insert([
            'envelope_id' => 7,
            'name' => "Anniversaire Pierre-Louis",
            'amount' => 25,
            'date' => mktime(0, 0, 0, 7, 11, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 7,
            'name' => "Anniversaire Marie-Agnès & Odile",
            'amount' => 12,
            'date' => mktime(0, 0, 0, 7, 2, 2015),
            'effective' => 1,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Vacances" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope8() {
    }

    /**
     * Run the database seed for envelope "Épargne" on account "Compte joint".
     *
     * @return void
     */
    public function runEnvelope9() {
    }

    /**
     * Run the database seed for envelope "Logement" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope10() {
        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bed & Breakfast Edimburg",
            'amount' => 150,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bed & Breakfast Dufftown",
            'amount' => 150,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bed & Breakfast Wick",
            'amount' => 150,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bed & Breakfast Ullapool",
            'amount' => 150,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bed & Breakfast Arrochar",
            'amount' => 150,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Transport" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope11() {
        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Shuttle",
            'amount' => 100,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Essence",
            'amount' => 100,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Nourriture" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope12() {
        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Repas",
            'amount' => 300,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

    /**
     * Run the database seed for envelope "Sorties" on account "Vacances en Écosse".
     *
     * @return void
     */
    public function runEnvelope13() {
        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Museum of Childhood",
            'amount' => 15,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Bateau Loch Lomond",
            'amount' => 30,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');

        DB::table('outcomes')->insert([
            'envelope_id' => 10,
            'name' => "Château d'Inveraray",
            'amount' => 20,
            'date' => mktime(0, 0, 0, 10, 1, 2015),
            'effective' => 0,
        ]);
        EventTableSeeder::seedFromEntity('outcome');
    }

}
