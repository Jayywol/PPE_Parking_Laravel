<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('place')->insert(
          array(
              'id' => 1,
              'available' => TRUE,
              'created_at' => '2019-01-01 00:00:00',
              'updated_at' => '2019-01-01 00:00:01',
          )
      );
    }
}
