<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_roles')->delete();
        
        \DB::table('model_has_roles')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Model\\Admin\\AdminUser',
                'model_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Model\\Admin\\AdminUser',
                'model_id' => 2,
            ),
            2 => 
            array (
                'role_id' => 2,
                'model_type' => 'App\\Model\\Admin\\AdminUser',
                'model_id' => 2,
            ),
        ));
        
        
    }
}