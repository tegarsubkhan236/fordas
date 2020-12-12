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
                'id' => 4,
                'nama' => 'DAGO',
                'created_at' => NULL,
                'updated_at' => '2020-11-30',
            ),
            1 => 
            array (
                'id' => 5,
                'nama' => 'PURWOKERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'nama' => 'BANDUNG',
                'created_at' => NULL,
                'updated_at' => '2020-11-30',
            ),
            3 => 
            array (
                'id' => 7,
                'nama' => 'JAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'nama' => 'CIMAHIZX',
                'created_at' => NULL,
                'updated_at' => '2020-11-30',
            ),
            5 => 
            array (
                'id' => 9,
                'nama' => 'GEDEBAGE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}