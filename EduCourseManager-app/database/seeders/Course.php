<?php

namespace Database\Seeders;

use App\Models\courses;
use Illuminate\Database\Seeder;

class Course extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        courses::insert([
            [
                'name' => 'Web Development Basics',
                'description' => 'Learn the basics of HTML, CSS, and JavaScript.',
                'price' => 200000,
                'status' => 1, 
                'student_count'=> 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Advanced JavaScript',
                'description' => 'Dive deeper into JavaScript with advanced concepts.',
                'price' => 300000,
                'status' => 1,
                'student_count'=> 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Introduction to Python',
                'description' => 'Learn the basics of Python programming language.',
                'price' => 250000,
                'status' => 1,
                'student_count'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Science Fundamentals',
                'description' => 'Explore the fundamentals of data science with Python.',
                'price' => 500000,
                'status' => 1,
                'student_count'=> 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile App Development with Flutter',
                'description' => 'Learn how to build cross-platform mobile apps using Flutter.',
                'price' => 400000,
                'status' => 1,
                'student_count'=> 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'React JS for Beginners',
                'description' => 'Learn how to create dynamic web applications with React JS.',
                'price' => 350000,
                'status' => 0, 
                'student_count'=> 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel Masterclass',
                'description' => 'Master Laravel framework to build robust web applications.',
                'price' => 450000,
                'status' => 1,
                'student_count'=> 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Machine Learning Basics',
                'description' => 'Get started with machine learning and AI concepts.',
                'price' => 600000,
                'status' => 1,
                'student_count'=> 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UI/UX Design Fundamentals',
                'description' => 'Learn the basics of UI/UX design for web and mobile apps.',
                'price' => 300000,
                'status' => 0, 
                'student_count'=> 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cybersecurity Basics',
                'description' => 'Understand the fundamentals of cybersecurity and how to protect systems.',
                'price' => 550000,
                'status' => 1,
                'student_count'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
