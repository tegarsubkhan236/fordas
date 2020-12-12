<?php

use Illuminate\Database\Seeder;

class WilayahDasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wilayah_das')->delete();
        
        \DB::table('wilayah_das')->insert(array (
            0 => 
            array (
                'id' => 17,
                'wilayah_id' => 4,
                'nama' => 'PURWOKERTO',
            ),
            1 => 
            array (
                'id' => 18,
                'wilayah_id' => 9,
                'nama' => 'COBLONG',
            ),
            2 => 
            array (
                'id' => 19,
                'wilayah_id' => 9,
                'nama' => 'DAGO',
            ),
            3 => 
            array (
                'id' => 20,
                'wilayah_id' => 9,
                'nama' => 'KALIWANG',
            ),
        ));
        
        
    }
}