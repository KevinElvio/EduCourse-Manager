<?php

namespace Database\Seeders;

use App\Models\courses;
use App\Models\registrations;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Registration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', '!=', 'admin')->get();
        $courses = courses::all();

        if ($users->isEmpty() || $courses->isEmpty()) {
            $this->command->info('Tabel users atau courses kosong. Silakan isi terlebih dahulu.');
            return;
        }

        foreach (range(1, 20) as $index) {
            $course = $courses->random();
            $student_id = $users->random()->id;

            registrations::create([
                'course_id' => $course->id,
                'student_id' => $student_id,
                'status' => fake()->randomElement(['Lunas', 'Belum Lunas']),
                'created_at' => now()->subDays(rand(1, 30)),
                'updated_at' => now(),
            ]);

            $course->increment('student_count');
        }
    }
}
