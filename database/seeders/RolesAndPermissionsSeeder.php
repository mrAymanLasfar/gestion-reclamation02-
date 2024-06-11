<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $coordinateurRole = Role::create(['name' => 'coordinateur']);
        $superviseurRole = Role::create(['name' => 'superviseur']);
        $operateurRole = Role::create(['name' => 'operateur']);

        // Create permissions and assign them to roles
        // Example permission
        $permission = Permission::create(['name' => 'view dashboard']);

        $adminRole->givePermissionTo($permission);
        $coordinateurRole->givePermissionTo($permission);
        $superviseurRole->givePermissionTo($permission);
        $operateurRole->givePermissionTo($permission);
    }
}
