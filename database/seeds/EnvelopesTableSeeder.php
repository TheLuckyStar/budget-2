<?php

use App\Envelope;
use Illuminate\Database\Seeder;

class EnvelopesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Envelope::find(1)->delete();
        Envelope::find(10)->delete();
        Envelope::find(37)->delete();
        Envelope::find(38)->delete();
        Envelope::find(39)->delete();
        Envelope::find(52)->forceDelete();
    }
}
