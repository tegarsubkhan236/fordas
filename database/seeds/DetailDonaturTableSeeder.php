<?php

use Illuminate\Database\Seeder;

class DetailDonaturTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detail_donatur')->delete();
        
        \DB::table('detail_donatur')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 7,
                'name' => 'donatur',
                'gender' => 'L',
                'alamat' => 'donatur',
                'no_hp' => '123123123',
                'created_at' => '2021-01-17',
                'updated_at' => '2021-01-17',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 10,
                'name' => 'wirawantw',
                'gender' => 'L',
                'alamat' => 'jl. dipatiukur',
                'no_hp' => '131312313',
                'created_at' => '2021-01-18',
                'updated_at' => '2021-01-18',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 11,
                'name' => 'cancan aja',
                'gender' => 'L',
                'alamat' => 'Jl.Dipatiukur no 138',
                'no_hp' => '082321024328',
                'created_at' => '2021-01-24',
                'updated_at' => '2021-01-24',
            ),
        ));
        
        
    }
}