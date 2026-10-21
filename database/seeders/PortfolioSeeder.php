<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PortfolioProfileSeeder::class,
            ServiceSeeder::class,
            ProjectSeeder::class,
            SocialLinkSeeder::class,
        ]);
    }
}
