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

        //php artisas db:seed

            DB::table('users')->insert([
        	'name' => 'Dayannis',
        	'email' => 'dayannis.y@gmail.com',
        	'password' => bcrypt('45678'),
        ]);
    }
}
