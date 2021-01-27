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
        $this->call(ProposalKategoriTableSeeder::class);
        $this->call(ProposalTableSeeder::class);
        $this->call(ProposalDonaturTableSeeder::class);
        $this->call(DetailDonaturTableSeeder::class);
        $this->call(DonasiTableSeeder::class);
    }
}
