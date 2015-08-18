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
        $this->runAccount5();
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
            'icon' => 'fa-home',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Transport',
            'icon' => 'fa-car',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Quotidien',
            'icon' => 'fa-cutlery',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Soins & santé',
            'icon' => 'fa-stethoscope',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Vêtements',
            'icon' => 'fa-umbrella',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Culture & Loisirs',
            'icon' => 'fa-book',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Cadeaux',
            'icon' => 'fa-gift',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'Vacances',
        ])->delete();

        Envelope::create([
            'account_id' => 1,
            'name' => 'Impôts',
            'icon' => 'fa-university',
        ]);

        Envelope::create([
            'account_id' => 1,
            'name' => 'DU Delphine',
            'icon' => 'fa-university',
        ]);
    }

    /**
     * Run the database seed for account "Vacances en Écosse".
     *
     * @return void
     */
    public function runAccount5()
    {
        Envelope::create([
            'account_id' => 5,
            'name' => 'Logement',
            'icon' => 'fa-home',
        ]);

        Envelope::create([
            'account_id' => 5,
            'name' => 'Transport',
            'icon' => 'fa-car',
        ]);

        Envelope::create([
            'account_id' => 5,
            'name' => 'Quotidien',
            'icon' => 'fa-cutlery',
        ]);

        Envelope::create([
            'account_id' => 5,
            'name' => 'Sorties',
            'icon' => 'fa-book',
        ]);
    }
}
