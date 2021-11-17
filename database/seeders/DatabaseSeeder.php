<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminUsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(LogsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(ConfigsTableSeeder::class);
    }
}
