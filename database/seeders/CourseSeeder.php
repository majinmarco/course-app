<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Full-Stack Web Development',
                'description' => 'Learn how to build dynamic web applications using modern technologies like Laravel, Vue.js, and Tailwind CSS.',
                'instructor' => 'Dr. Emily Carter',
            ],
            [
                'title' => 'Data Science with Python',
                'description' => 'Master data analysis, machine learning, and AI with hands-on projects in Python using Pandas, NumPy, and Scikit-Learn.',
                'instructor' => 'Prof. James Thompson',
            ],
            [
                'title' => 'Cybersecurity Fundamentals',
                'description' => 'Explore network security, ethical hacking, and cryptography to defend against cyber threats.',
                'instructor' => 'Michael Anderson',
            ],
            [
                'title' => 'AI and Machine Learning',
                'description' => 'Understand the principles of deep learning, neural networks, and AI applications using TensorFlow and PyTorch.',
                'instructor' => 'Dr. Sarah Johnson',
            ],
            [
                'title' => 'Game Development with Unity',
                'description' => 'Create immersive 2D and 3D games using Unity and C#, covering animation, physics, and game mechanics.',
                'instructor' => 'Robert Garcia',
            ],
            [
                'title' => 'Financial Analysis & Investment',
                'description' => 'Analyze financial markets, stock valuation, and investment strategies using real-world case studies.',
                'instructor' => 'Sophia Martinez',
            ],
            [
                'title' => 'Mobile App Development with Flutter',
                'description' => 'Build cross-platform mobile applications using Flutter and Dart for iOS and Android.',
                'instructor' => 'Kevin Adams',
            ],
            [
                'title' => 'Cloud Computing with AWS',
                'description' => 'Learn about cloud services, serverless computing, and DevOps using Amazon Web Services.',
                'instructor' => 'Dr. Laura White',
            ],
            [
                'title' => 'Digital Marketing & SEO',
                'description' => 'Master social media marketing, search engine optimization, and Google Ads to grow online businesses.',
                'instructor' => 'David Wilson',
            ],
            [
                'title' => 'Blockchain and Cryptocurrency',
                'description' => 'Dive into blockchain technology, smart contracts, and cryptocurrency trading strategies.',
                'instructor' => 'Alice Roberts',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}