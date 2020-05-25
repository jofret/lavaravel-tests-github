<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\Flight::create([
        	'flight_name'	=>	'caracas'
        ]);

        App\Flight::create([
        	'flight_name'	=>	'buenos aires'
        ]);

        App\Flight::create([
        	'flight_name'	=>	'lima'
        ]);
        App\Flight::create([
        	'flight_name'	=>	'bogota'
        ]);

        App\Flight::create([
        	'flight_name'	=>	'miami'
        ]);

        App\Flight::create([
        	'flight_name'	=>	'vene'
        ]);
    }
}
