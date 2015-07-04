<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Seed database using last inserted entity in given table.
     * @param  string $entity Entity name (singular form of the table name)
     * @return void
     */
    static public function seedFromEntity($entity)
    {
        $userId = rand(1, 2);
        $entityId = DB::table($entity.'s')->max('id');

        $dateMin = mktime(0, 0, 0, 7, 1, 2015);
        $dateMax = mktime(0, 0, 0, 7, 31, 2015);
        $date = rand($dateMin, $dateMax);

        DB::table('events')->insert([
            'user_id' => $userId,
            'entity_id' => $entityId,
            'entity' => $entity,
            'action' => 'create',
            'date' => $date,
        ]);
    }
}
