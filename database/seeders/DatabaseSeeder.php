<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin_role = Role::create(['name' => 'admin']);
        $user_role = Role::create(['name' => 'user']);
        $community_role = Role::create(['name' => 'community']);
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($admin_role);
        
        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($user_role);

        $community = User::create([
            'name' => 'community',
            'email' => 'community@community.com',
            'password' => bcrypt('password'),
        ]);
        $community->assignRole($community_role);
    }
}
