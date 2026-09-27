<?php

namespace Database\Seeders;

use App\Enums\PackageType;
use App\Models\Package\ExtensionPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtensionPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $extensionPackages = [

            // For Regular
            [
                'package_type' => PackageType::REGULAR,
                'from_quantity' => 1,
                'to_quantity' => 9,
                'price_per_listing' => 4000
            ],
            [
                'package_type' => PackageType::REGULAR,
                'from_quantity' => 10,
                'to_quantity' => 20,
                'price_per_listing' => 3500
            ],
            [
                'package_type' => PackageType::REGULAR,
                'from_quantity' => 11,
                'to_quantity' => null,
                'price_per_listing' => 3000
            ],


              // For Shop
              [
                'package_type' => PackageType::SHOP,
                'from_quantity' => 1,
                'to_quantity' => 9,
                'price_per_listing' => 6000
            ],
            [
                'package_type' => PackageType::SHOP,
                'from_quantity' => 10,
                'to_quantity' => 20,
                'price_per_listing' => 5500
            ],
            [
                'package_type' => PackageType::SHOP,
                'from_quantity' => 11,
                'to_quantity' => null,
                'price_per_listing' => 5000
            ],


        ];

        foreach ($extensionPackages as $extensionPackage) {
            ExtensionPackage::create($extensionPackage);
        }
    }
}
