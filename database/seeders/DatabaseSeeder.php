<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seeder core
        $this->call([
            SettingSeeder::class,
            RoleAndPermissionSeeder::class,
            CampusSeeder::class,
            MajorSeeder::class,
            CategorySeeder::class,

        ]);


        // Seeder test
        $this->call([
            PackageSeeder::class,
            ExtensionPackageSeeder::class,
            PaymentMethodAndAccountSeeder::class
        ]);



        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@polyloot.vn',
            'password' => 'password',
            'phone' => '+84123456789',
            'status' => \App\Enums\AccountStatus::ACTIVE
        ])->assignRole('Super Admin');
    }
}
