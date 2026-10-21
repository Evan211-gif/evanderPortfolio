<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Student Enrollment System',
                'description' => 'A student enrollment system built with Laravel, Angular, and MySQL to manage student registration and enrollment workflows.',
                'image_url' => 'https://dummyimage.com/640x360/e5e7eb/374151&text=Student+Enrollment+System',
                'project_url' => null,
                'link_label' => 'Project in development',
                'display_order' => 1,
            ],
            [
                'title' => 'Laravel Portfolio Website',
                'description' => 'A personal portfolio website built with Laravel, featuring my background, learning journey, and software projects.',
                'image_url' => 'https://dummyimage.com/640x360/e5e7eb/374151&text=Laravel+Portfolio',
                'project_url' => null,
                'link_label' => 'View portfolio',
                'display_order' => 2,
            ],
            [
                'title' => 'Future Project',
                'description' => 'More practical software projects will be added here as I continue learning programming, databases, and web development.',
                'image_url' => 'https://dummyimage.com/640x360/e5e7eb/374151&text=Future+Project',
                'project_url' => '#contact',
                'link_label' => 'Coming soon',
                'display_order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::query()->updateOrCreate(
                ['title' => $project['title']],
                [...$project, 'is_published' => true],
            );
        }
    }
}
