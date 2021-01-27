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
                'id' => 1,
                'wilayah_id' => 1,
                'nama' => 'DAS CIBUNI',
            ),
            1 => 
            array (
                'id' => 2,
                'wilayah_id' => 2,
                'nama' => 'DAS CISADANE',
            ),
            2 => 
            array (
                'id' => 3,
                'wilayah_id' => 3,
                'nama' => 'DAS CITARUM',
            ),
            3 => 
            array (
                'id' => 4,
                'wilayah_id' => 1,
                'nama' => 'DAS CIDAMAR',
            ),
            4 => 
            array (
                'id' => 5,
                'wilayah_id' => 1,
                'nama' => 'DAS CIKANDANG',
            ),
            5 => 
            array (
                'id' => 6,
                'wilayah_id' => 1,
                'nama' => 'DAS CILAKI',
            ),
            6 => 
            array (
                'id' => 7,
                'wilayah_id' => 1,
                'nama' => 'DAS CILAYU',
            ),
            7 => 
            array (
                'id' => 8,
                'wilayah_id' => 1,
                'nama' => 'DAS CIPANDAK',
            ),
            8 => 
            array (
                'id' => 9,
                'wilayah_id' => 1,
                'nama' => 'DAS CISADEA',
            ),
            9 => 
            array (
                'id' => 10,
                'wilayah_id' => 1,
                'nama' => 'DAS CITARUM',
            ),
            10 => 
            array (
                'id' => 11,
                'wilayah_id' => 1,
                'nama' => 'DAS CIMANUK',
            ),
            11 => 
            array (
                'id' => 12,
                'wilayah_id' => 2,
                'nama' => 'DAS CIBAREO',
            ),
            12 => 
            array (
                'id' => 13,
                'wilayah_id' => 2,
                'nama' => 'DAS CIDURIAN',
            ),
            13 => 
            array (
                'id' => 14,
                'wilayah_id' => 2,
                'nama' => 'DAS CILIWUNG',
            ),
            14 => 
            array (
                'id' => 15,
                'wilayah_id' => 2,
                'nama' => 'DAS CIMANCEURI',
            ),
            15 => 
            array (
                'id' => 16,
                'wilayah_id' => 2,
                'nama' => 'DAS CIMANDIRI',
            ),
            16 => 
            array (
                'id' => 17,
                'wilayah_id' => 2,
                'nama' => 'DAS CIUJUNG',
            ),
            17 => 
            array (
                'id' => 18,
                'wilayah_id' => 2,
                'nama' => 'DAS KALI ANGKE PESANGGRAHAN',
            ),
            18 => 
            array (
                'id' => 19,
                'wilayah_id' => 2,
                'nama' => 'DAS KALI BEKASI',
            ),
            19 => 
            array (
                'id' => 20,
                'wilayah_id' => 2,
                'nama' => 'DAS KALI KRUKUT',
            ),
            20 => 
            array (
                'id' => 21,
                'wilayah_id' => 2,
                'nama' => 'DAS KALI SUNTER',
            ),
        ));
        
        
    }
}