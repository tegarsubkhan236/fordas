<?php

use Illuminate\Database\Seeder;

class WilayahTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wilayah')->delete();
        
        \DB::table('wilayah')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'KABUPATEN BANDUNG',
                'created_at' => NULL,
                'updated_at' => '2021-01-26',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'KABUPATEN BOGOR',
                'created_at' => NULL,
                'updated_at' => '2021-01-26',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'KOTA BANDUNG',
                'created_at' => NULL,
                'updated_at' => '2021-01-26',
            ),
        ));
        
        
    }
}