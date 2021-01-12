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
                'nama' => 'DAGO',
            ),
        ));


    }
}
