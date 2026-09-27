<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $campuses = include database_path('data/campuses.php');

        foreach ($campuses as $campus) {
            $campus['slug'] = Str::slug($campus['name']);
            Campus::create($campus);
        }
    }
}
