<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('places')->insert(
          array(
              array(
                  'id' => 1,
                  'available' => TRUE,
                  'created_at' => '2019-01-01 00:00:00',
                  'updated_at' => '2019-01-01 00:00:01',
              ),
              array(
                  'id' => 2,
                  'available' => FALSE,
                  'created_at' => '2019-01-02 08:00:00',
                  'updated_at' => '2019-01-02 08:00:01',
              ),
              array(
                  'id' => 3,
                  'available' => TRUE,
                  'created_at' => '2019-01-03 12:00:00',
                  'updated_at' => '2019-01-03 12:00:01',
              ),
              array(
                  'id' => 4,
                  'available' => TRUE,
                  'created_at' => '2019-01-04 16:00:00',
                  'updated_at' => '2019-01-04 16:00:01',
              )
          )
      );
    }
}
