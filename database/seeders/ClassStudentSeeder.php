<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassStudent;

class ClassStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassStudent::factory()->count(20)->create();
    }
}
