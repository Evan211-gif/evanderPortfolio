<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Building responsive websites and learning to develop full-stack applications using Laravel and modern web technologies.',
                'icon_path' => 'indify/assets/img/web-design.svg',
                'display_order' => 1,
            ],
            [
                'title' => 'Database Management',
                'description' => 'Learning to design, organize, and manage relational databases using MySQL for practical applications.',
                'icon_path' => 'indify/assets/img/web-development.svg',
                'display_order' => 2,
            ],
            [
                'title' => 'Programming',
                'description' => 'Practicing programming fundamentals, problem-solving, and application development through hands-on projects.',
                'icon_path' => 'indify/assets/img/graphics-design.svg',
                'display_order' => 3,
            ],
            [
                'title' => 'Software Projects',
                'description' => 'Creating practical systems that solve real-world problems while improving my development and technical skills.',
                'icon_path' => 'indify/assets/img/soft-skills.svg',
                'display_order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::query()->updateOrCreate(
                ['title' => $service['title']],
                [...$service, 'is_published' => true],
            );
        }
    }
}
