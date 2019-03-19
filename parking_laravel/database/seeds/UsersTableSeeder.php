<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('users')->insert(
             array(
                 'id' => 1,
                 'firstname' => 'Alexandre',
                 'lastName' => 'Ma',
                 'email' => 'alex@test.com',
                 'password' => Hash::make('alexandre12'),
                 'rang' => NULL,
                 'created_at' => '2019-01-01 00:00:00',
                 'updated_at' => '2019-01-01 00:00:01',
                 'admin' => TRUE,
             )
         );
     }
}
