<?php

use App\Invitation;
use Illuminate\Database\Seeder;

class InvitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invitation::create([
            'account_id' => 1,
            'email' => 'famille@dubandubois.com',
        ]);
    }
}
