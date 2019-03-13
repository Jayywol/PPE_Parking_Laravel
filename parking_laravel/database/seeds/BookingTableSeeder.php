<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert(
            array(
                'id' => 1,
                'created_at' => '2019-01-01 00:00:00',
                'updated_at' => '2019-01-01 00:00:01',
                'duration' => 0,
                'users_id' => 1,
                'place_id' => 1,
            )
        );
    }
}
