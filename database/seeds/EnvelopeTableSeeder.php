<?php

use Illuminate\Database\Seeder;

class EnvelopeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runAccount1();
        $this->runAccount2();
    }

    /**
     * Run the database seed for account "Compte joint".
     *
     * @return void
     */
    public function runAccount1()
    {
        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Logement',
            'icon' => 'home',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Transport',
            'icon' => 'car',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Nourriture',
            'icon' => 'cutlery',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Soins & santé',
            'icon' => 'stethoscope',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Vêtements',
            'icon' => 'umbrella',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Culture & Loisirs',
            'icon' => 'book',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Cadeaux',
            'icon' => 'gift',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Vacances',
            'icon' => 'sun',
            'open' => 0,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Épargne',
            'icon' => 'gift',
            'open' => 0,
        ]);
        EventTableSeeder::seedFromEntity('envelope');
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Logement',
            'icon' => 'home',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Transport',
            'icon' => 'car',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Nourriture',
            'icon' => 'cutlery',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');

        DB::table('envelopes')->insert([
            'account_id' => 1,
            'name' => 'Sorties',
            'icon' => 'book',
            'open' => 1,
        ]);
        EventTableSeeder::seedFromEntity('envelope');
    }
}
