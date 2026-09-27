<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $majors = include database_path('data/majors.php');

        foreach ($majors as $major) {
            $major['slug'] = Str::slug($major['name']);
            Major::create($major);
        }
    }
}
