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
            4 => 
            array (
                'id' => 7,
                'username' => 'donatur',
                'password' => 'donatur',
                'das_id' => NULL,
                'level' => 5,
                'status' => 1,
                'created_at' => '2021-01-17 13:01:09',
                'updated_at' => '2021-01-17 13:01:09',
            ),
            5 => 
            array (
                'id' => 8,
                'username' => 'korwil_DAS CISADANE',
                'password' => '12345',
                'das_id' => 2,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'username' => 'korwil_DAS TASIK',
                'password' => '12345',
                'das_id' => 3,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'username' => 'wirawan',
                'password' => '12345',
                'das_id' => NULL,
                'level' => 5,
                'status' => 1,
                'created_at' => '2021-01-18 06:17:32',
                'updated_at' => '2021-01-18 06:17:32',
            ),
            8 => 
            array (
                'id' => 11,
                'username' => 'cancan',
                'password' => 'cancan',
                'das_id' => NULL,
                'level' => 5,
                'status' => 1,
                'created_at' => '2021-01-24 16:34:25',
                'updated_at' => '2021-01-24 16:34:25',
            ),
            9 => 
            array (
                'id' => 12,
                'username' => 'korwil_DAS CIDAMAR',
                'password' => '12345',
                'das_id' => 4,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'username' => 'korwil_DAS CIKANDANG',
                'password' => '12345',
                'das_id' => 5,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'username' => 'korwil_DAS CILAKI',
                'password' => '12345',
                'das_id' => 6,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'username' => 'korwil_DAS CILAYU',
                'password' => '12345',
                'das_id' => 7,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'username' => 'korwil_DAS CIPANDAK',
                'password' => '12345',
                'das_id' => 8,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'username' => 'korwil_DAS CISADEA',
                'password' => '12345',
                'das_id' => 9,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'username' => 'korwil_DAS CITARUM',
                'password' => '12345',
                'das_id' => 10,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'username' => 'korwil_DAS CIMANUK',
                'password' => '12345',
                'das_id' => 11,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'username' => 'korwil_DAS CIBAREO',
                'password' => '12345',
                'das_id' => 12,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'username' => 'korwil_DAS CIDURIAN',
                'password' => '12345',
                'das_id' => 13,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'username' => 'korwil_DAS CILIWUNG',
                'password' => '12345',
                'das_id' => 14,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'username' => 'korwil_DAS CIMANCEURI',
                'password' => '12345',
                'das_id' => 15,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'username' => 'korwil_DAS CIMANDIRI',
                'password' => '12345',
                'das_id' => 16,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'username' => 'korwil_DAS CIUJUNG',
                'password' => '12345',
                'das_id' => 17,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'username' => 'korwil_DAS KALI ANGKE PESANGGRAHAN',
                'password' => '12345',
                'das_id' => 18,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'username' => 'korwil_DAS KALI BEKASI',
                'password' => '12345',
                'das_id' => 19,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'username' => 'korwil_DAS KALI KRUKUT',
                'password' => '12345',
                'das_id' => 20,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'username' => 'korwil_DAS KALI SUNTER',
                'password' => '12345',
                'das_id' => 21,
                'level' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}