<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'username' => 'super',
                'password' => 'super',
                'das_id' => NULL,
                'level' => 1,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'username' => 'ketua_forum',
                'password' => 'ketua_forum',
                'das_id' => NULL,
                'level' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'username' => 'sekre_forum',
                'password' => 'sekre_forum',
                'das_id' => NULL,
                'level' => 3,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'username' => 'korwil_dago',
                'password' => 'korwil_dago',
                'das_id' => 1,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
