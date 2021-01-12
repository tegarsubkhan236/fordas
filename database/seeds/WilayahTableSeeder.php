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
                'nama' => 'BANDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
