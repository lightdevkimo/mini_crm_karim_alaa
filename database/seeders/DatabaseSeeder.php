<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'employer']);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password'=> bcrypt('admin')
        ]);

        $employer = \App\Models\User::factory()->create([
            'name' => 'Employer',
            'email' => 'employer@test.com',
            'password'=> bcrypt('employer')
        ]);

        $admin->assignRole($role1);

        $employer->assignRole($role2);

    }
}
