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
           $users = User::all();
           $courses = courses::all();
   
           // Pastikan tabel users dan courses tidak kosong
           if ($users->isEmpty() || $courses->isEmpty()) {
               $this->command->info('Tabel users atau courses kosong. Silakan isi terlebih dahulu.');
               return;
           }
   
           // Loop untuk membuat 20 data dummy registrasi
           foreach (range(1, 20) as $index) {
               registrations::create([
                   'course_id' => $courses->random()->id,
                   'student_id' => $users->random()->id,
                   'status' => fake()->randomElement(['Lunas', 'Belum Lunas']),
                   'created_at' => now()->subDays(rand(1, 30)),
                   'updated_at' => now(),
               ]);
           }
    }
}
