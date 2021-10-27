<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$1SbBYYUJkwmkTXvgJvYLOeK/SFvdiPSsTmWXporIEPUDi7nD.Xxy.',
                'status' => 1,
                'remember_token' => 'lZ9CfMUevvTKu9JY1A6ayKW5MIOSQv6pGBeSb0iCEaptvzk3amvJD0LDAQHD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}