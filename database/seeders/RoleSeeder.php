<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Here you can add roles for your application
        // Now we are going to insert the role into our database
        $role = Role::create(['name' => 'user']);

        // We have made a role, but it has no permission yet.
        // We need to give the role permission, here is how you can do it
        $permission = Permission::create(['name' => 'edit']); // First we need to make a new Permission
    
        // Assign your Permission to your Role
        $permission->assignRole($role); 
        // You can also use:
        // $role->givePermissionTo($permission)
    }
}
