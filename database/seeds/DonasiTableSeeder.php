<?php

use Illuminate\Database\Seeder;

class DonasiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('donasi')->delete();
        
        \DB::table('donasi')->insert(array (
            0 => 
            array (
                'id' => 4,
                'proposal_id' => 1,
                'total_donasi' => 1000000,
                'bukti_transfer' => 'BslNs0lt_400x400.png',
                'keterangan' => 'semangat',
                'detail_donatur_id' => 1,
                'status' => 2,
                'created_at' => '2021-01-23',
                'updated_at' => '2021-01-24',
            ),
            1 => 
            array (
                'id' => 5,
                'proposal_id' => 1,
                'total_donasi' => 6000,
                'bukti_transfer' => '1.png',
                'keterangan' => 'basss',
                'detail_donatur_id' => 1,
                'status' => 2,
                'created_at' => '2021-01-23',
                'updated_at' => '2021-01-23',
            ),
            2 => 
            array (
                'id' => 6,
                'proposal_id' => 1,
                'total_donasi' => NULL,
                'bukti_transfer' => NULL,
                'keterangan' => NULL,
                'detail_donatur_id' => 1,
                'status' => 0,
                'created_at' => '2021-01-24',
                'updated_at' => '2021-01-24',
            ),
            3 => 
            array (
                'id' => 7,
                'proposal_id' => 6,
                'total_donasi' => 1500000,
                'bukti_transfer' => 'BslNs0lt_400x400.png',
                'keterangan' => 'bantuan',
                'detail_donatur_id' => 3,
                'status' => 1,
                'created_at' => '2021-01-26',
                'updated_at' => '2021-01-26',
            ),
        ));
        
        
    }
}