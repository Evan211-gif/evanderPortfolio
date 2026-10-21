<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socialLinks = [
            [
                'label' => 'GitHub',
                'url' => 'https://github.com/Evan211-gif',
                'icon_class' => 'fab fa-github',
                'display_order' => 1,
            ],
            [
                'label' => 'Facebook',
                'url' => 'https://www.facebook.com/evan0720',
                'icon_class' => 'fab fa-facebook',
                'display_order' => 2,
            ],
            [
                'label' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/evander-dayoc-600bab36a/',
                'icon_class' => 'fab fa-linkedin',
                'display_order' => 3,
            ],
            [
                'label' => 'Email',
                'url' => 'mailto:evander.dayoc@gmail.com',
                'icon_class' => 'fas fa-envelope',
                'display_order' => 4,
            ],
        ];

        foreach ($socialLinks as $socialLink) {
            SocialLink::query()->updateOrCreate(
                ['label' => $socialLink['label']],
                [...$socialLink, 'is_published' => true],
            );
        }
    }
}
