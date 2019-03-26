<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert(
          array(
            array(
                'created_at' => '2019-01-01 00:00:00',
                'updated_at' => '2019-01-01 00:00:01',
                'date_end' => '2019-01-06',
                'users_id' => 1,
                'place_id' => 1,
            ),
            array(
                'created_at' => '2019-02-01 00:00:00',
                'updated_at' => '2019-02-01 00:00:01',
                'date_end' => '2019-02-06',
                'users_id' => 2,
                'place_id' => 2,
            )
        ));
    }
}
