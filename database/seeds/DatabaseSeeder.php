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
        // $this->call(UserSeeder::class);
        $this->call(WilayahTableSeeder::class);

        $this->call(WilayahDasTableSeeder::class);

        $this->call(UsersTableSeeder::class);
    }
}
