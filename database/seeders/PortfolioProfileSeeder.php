<?php

namespace Database\Seeders;

use App\Models\PortfolioProfile;
use Illuminate\Database\Seeder;

class PortfolioProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortfolioProfile::query()->updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Evander Dayoc',
                'headline' => 'IT Student | Aspiring Software Developer',
                'intro' => "I'm an Information Technology student learning to build practical software solutions. I'm currently developing my skills in web development, databases, and programming through hands-on projects.",
                'about' => "I'm an Information Technology student working toward becoming a software developer. I enjoy learning how web interfaces, backend logic, and databases work together to solve practical problems.",
                'profile_image_path' => 'indify/assets/img/profile.png',
                'cv_path' => null,
            ],
        );
    }
}
