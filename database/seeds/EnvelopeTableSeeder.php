<?php

use App\Envelope;
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
        Envelope::create([
            'account_id' => 1,
            'name' => 'Logement',
            'icon' => 'home',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Transport',
            'icon' => 'car',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Nourriture',
            'icon' => 'cutlery',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Soins & santé',
            'icon' => 'stethoscope',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Vêtements',
            'icon' => 'umbrella',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Culture & Loisirs',
            'icon' => 'book',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Cadeaux',
            'icon' => 'gift',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Vacances',
            'icon' => 'sun',
        ])->delete();

        Envelope::create([
            'account_id' => 1,
            'name' => 'Épargne',
            'icon' => 'gift',
        ])->delete();
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount2()
    {
        Envelope::create([
            'account_id' => 1,
            'name' => 'Logement',
            'icon' => 'home',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Transport',
            'icon' => 'car',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Nourriture',
            'icon' => 'cutlery',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Sorties',
            'icon' => 'book',
        ]);
    }
}
