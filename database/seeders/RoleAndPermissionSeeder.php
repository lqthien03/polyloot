<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();



        // create permissions admin

        $admin_access = Permission::create(['name' => 'access_admin_panel']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'User']);

        $rolespermissions = include database_path('data/rolespermissions.php');

        foreach ($rolespermissions['admin'] as $role => $permissions) {
            $role = Role::create([
                'name' => $role
            ]);

            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission]);
            }
            $role->syncPermissions(array_merge($permissions,[$admin_access]));
        }
    }
}
