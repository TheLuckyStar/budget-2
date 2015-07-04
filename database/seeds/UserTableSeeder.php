<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runUser1();
        $this->runUser2();
    }

    /**
     * Run the database seed for user "Simon Dubois".
     *
     * @return void
     */
    public function runUser1()
    {
        DB::table('users')->insert([
            'name' => 'Simon Dubois',
            'email' => 'simon@dubandubois.com',
            'password' => bcrypt('secret'),
        ]);
    }

    /**
     * Run the database seed for user "Delphine Duban".
     *
     * @return void
     */
    public function runUser2()
    {
        DB::table('users')->insert([
            'name' => 'Delphine Duban',
            'email' => 'delphine@dubandubois.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
