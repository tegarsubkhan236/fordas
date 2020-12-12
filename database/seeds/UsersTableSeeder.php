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
                'id' => 23,
                'username' => 'ketua_PURWOKERTO',
                'password' => '12345',
                'das_id' => 17,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 24,
                'username' => 'sekretaris_PURWOKERTO',
                'password' => '12345',
                'das_id' => 17,
                'level' => 5,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 25,
                'username' => 'ketua_COBLONG',
                'password' => '12345',
                'das_id' => 18,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 26,
                'username' => 'sekretaris_COBLONG',
                'password' => '12345',
                'das_id' => 18,
                'level' => 5,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 27,
                'username' => 'ketua_DAGO',
                'password' => '12345',
                'das_id' => 19,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 28,
                'username' => 'sekretaris_DAGO',
                'password' => '12345',
                'das_id' => 19,
                'level' => 5,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 29,
                'username' => 'ketua_KALIWANG',
                'password' => '12345',
                'das_id' => 20,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 30,
                'username' => 'sekretaris_KALIWANG',
                'password' => '12345',
                'das_id' => 20,
                'level' => 5,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}