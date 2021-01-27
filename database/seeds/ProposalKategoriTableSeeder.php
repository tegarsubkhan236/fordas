<?php

use Illuminate\Database\Seeder;

class ProposalKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proposal_kategori')->delete();
        
        \DB::table('proposal_kategori')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Rapat',
                'created_at' => '2021-01-17',
                'updated_at' => '2021-01-17',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Bencana alam',
                'created_at' => '2021-01-18',
                'updated_at' => '2021-01-18',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Kerusakan lingkungan',
                'created_at' => '2021-01-18',
                'updated_at' => '2021-01-18',
            ),
        ));
        
        
    }
}