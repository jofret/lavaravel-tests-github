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
        	'flight_name'	=>	'caracas',
        	'number'		=>  550
        ]);

        App\Flight::create([
        	'flight_name'	=>	'buenos aires',
        	'number'		=>  250
        ]);

        App\Flight::create([
        	'flight_name'	=>	'lima',
        	'number'		=>  250
        ]);
        App\Flight::create([
        	'flight_name'	=>	'bogota',
        	'number'		=>  50
        ]);

        App\Flight::create([
        	'flight_name'	=>	'miami',
        	'number'		=>  150
        ]);

        App\Flight::create([
        	'flight_name'	=>	'vene',
        	'number'		=>  350
        ]);
    }
}
