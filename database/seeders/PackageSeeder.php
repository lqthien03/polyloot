<?php

namespace Database\Seeders;

use App\Models\Package\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $packages = [
            [
                'name' => 'Gói Cơ Bản',
                'package_type' => \App\Enums\PackageType::SHOP,
                'max_listings' => 20,
                'price' => 80000,
                'description' => 'Gói cơ bản chỉ dành cho người dùng đăng ký cửa hàng'
            ]
        ];


        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
