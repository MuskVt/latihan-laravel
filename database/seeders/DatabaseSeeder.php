<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(100)->create();

        // User::factory(10)->create();

        // Student::factory()->create([
        //     'name' => 'Test Student',
        //     'nim' => '1234567890',
        // ]);
    }
}
