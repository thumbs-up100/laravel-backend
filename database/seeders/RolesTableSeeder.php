<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '财务',
                'guard_name' => 'admin',
                'created_at' => '2020-01-17 13:32:04',
                'updated_at' => '2020-01-17 13:32:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '行政',
                'guard_name' => 'admin',
                'created_at' => '2020-01-17 13:32:22',
                'updated_at' => '2020-01-17 13:32:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'test',
                'guard_name' => 'admin',
                'created_at' => '2020-02-05 11:14:39',
                'updated_at' => '2020-02-05 11:14:54',
            ),
        ));
        
        
    }
}